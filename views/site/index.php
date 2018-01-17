<?php

/* @var $this yii\web\View */

$this->title = 'ニチアサッター - ニチアサ実況用Twitterクライアント';
?>
<div class="l-site-index">
    <div class="l-main-content">
        <div>
            <p>ニチアサッターは、ニチアサ実況をより快適に行うためのTwitterクライアントです。</p>
            <p>ニチアサったーで快適な実況生活を始めましょう！</p>
        </div>
        <?= yii\authclient\widgets\AuthChoice::widget([
            'baseAuthUrl' => ['site/auth'],
            'popupMode' => false,
        ]) ?>
    </div>
</div>
