<?php
namespace app\widgets;

use Yii;
use yii\helpers\Html;

/**
 *
 */
class BootstrapAlert extends \yii\bootstrap\Alert
{
    /**
     * Initializes the widget options.
     * This method sets the default values for various options.
     */
    protected function initOptions()
    {
        parent::initOptions();
        // Bootstrap 4に合わせます
        Html::removeCssClass($this->options, ['in']);
        Html::addCssClass($this->options, ['show']);
    }
}
