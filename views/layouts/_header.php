<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
/**
 * @var $this yii\web\View
 */
$this->registerCss('
.l-header {
    height: 50px;
}
');
?>
<header>
    <div class="l-header container d-flex align-items-center">
        <div class="mr-auto">
            <?= Html::a(Yii::$app->name, '/', ['class' => 'd-block brand']) ?>
        </div>
        <div class="ml-auto">
            <!-- 右カラム -->
        </div>
    </div>
</header>
