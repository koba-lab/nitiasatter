<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * つぶやきを投稿するフォーム
 */
class StatusForm extends Model
{
    public $status;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['status', 'string', 'max' => 280],
        ];
    }

    /**
     * つぶやきを投稿
     */
    public function postStatus()
    {
        if (!$this->validate()) {
            return false;
        }
        return Yii::$app->authClientCollection->getClient('twitter')->api('statuses/update.json', 'POST', $this->getAttributes());
    }
}
