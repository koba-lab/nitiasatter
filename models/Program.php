<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Program は番組情報周りの情報を管理するモデルです
 *
 * @property User|null $user This property is read-only.
 *
 */
class Program extends Model
{
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [];
    }

    /**
     * 現在の時間に対応したタグを取得する
     */
    public function getCurrentTags()
    {
        $tags = [];
        if (isset(Yii::$app->params['nitiasaPrograms'][$this->getCurrentProgram()])) {
            $tags = Yii::$app->params['nitiasaPrograms'][$this->getCurrentProgram()]['tags'];
        }
        return array_merge([
            '#nitiasa',
        ], $tags);
    }

    /**
     * @return string
     */
    public function getCurrentProgram()
    {
        foreach (Yii::$app->params['nitiasaPrograms'] as $key => $program) {
            // @fixme 一発で比較できるイケてるロジックぷりーず
            $start = strtotime(date(sprintf('Y-m-d %s', $program['start_at'])));
            $end = strtotime(date(sprintf('Y-m-d %s', $program['end_at'])));
            if (time() >= $start && time() < $end) {
                return $key;
            }
        }
        return '';
    }
}
