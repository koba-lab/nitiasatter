<?php
namespace app\widgets;
use Yii;
use yii\helpers\Html;

/**
 */
class FontAwesome extends \yii\base\Widget
{
    public $options = [
        'class' => 'fa',
        'aria-hidden' => 'true',
    ];

    public $icon;

    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();
        \app\assets\FontAwesomeAsset::register($this->getView());
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        Html::addCssClass($this->options, sprintf('fa-%s', $this->icon));
        return Html::tag('i', '', $this->options);
    }
}
