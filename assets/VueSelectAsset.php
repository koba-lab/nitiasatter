<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class VueSelectAsset extends AssetBundle
{
    public $basePath = '';
    public $baseUrl = '';
    public $css = [];
    public $js = ['https://unpkg.com/vue-select@latest'];
    public $depends = ['app\assets\VuejsAsset'];
}
