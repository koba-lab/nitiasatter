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
class VueNotificationsAsset extends AssetBundle
{
    public $sourcePath = '@npm-assets/vue-notifications';
    public $baseUrl = '@web';
    public $js = ['dist/vue-notifications.es5.min.js'];
    public $depends = ['app\assets\VuejsAsset'];
}
