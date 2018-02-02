<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * つぶやきを投稿するフォーム
 */
class StatusForm extends Model
{
    public $tags;
    public $status;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['tags', 'required'],
            ['status', 'string', 'max' => 280],
        ];
    }

    /**
     * 
     */
    public function setDefaultTags()
    {
        $program = new Program;
        $this->tags = $program->getCurrentTags();
    }

    /**
     * つぶやきを投稿
     */
    public function postStatus()
    {
        $this->status .= "\n" . implode(' ', $this->tags);

        if (!$this->validate()) {
            return false;
        }
        return Yii::$app->authClientCollection->getClient('twitter')->api('statuses/update.json', 'POST', $this->getAttributes());
    }
}
