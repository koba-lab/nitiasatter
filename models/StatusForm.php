<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * つぶやきを投稿するフォーム
 */
class StatusForm extends Model
{
    public $tag;
    public $status;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['tag', 'string', 'max' => 100],
            ['status', 'string', 'max' => 280],
        ];
    }

    /**
     * 
     */
    public function setDefaultTag()
    {
        $this->tag = "#nitiasa"; // @todo あとでDBとかから取得するようにします
    }

    /**
     * つぶやきを投稿
     */
    public function postStatus()
    {
        $this->status .= "\n" . $this->tag;

        if (!$this->validate()) {
            return false;
        }
        return Yii::$app->authClientCollection->getClient('twitter')->api('statuses/update.json', 'POST', $this->getAttributes());
    }
}
