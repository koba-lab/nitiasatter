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
.l-header .brand img {
    max-height: 40px;
}
');
?>
<header>
    <div class="l-header container d-flex align-items-center">
        <div class="mx-auto">
            <a href="/" class="d-block brand">
                <?= Html::img('/images/logo.png', ['class' => 'img-fluid']) ?>
                <span class="sr-only"><?= Yii::$app->name ?></span>
            </a>
        </div>
    </div>
</header>
