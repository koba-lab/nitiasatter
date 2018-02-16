<?php 
use yii\helpers\Html;
use app\widgets\FontAwesome;

$this->registerCss('
.btn-twitter {
    background-color: #00aced;
    color: #fff;
}
.btn-twitter:hover {
    background-color: #0087ba;
    color: #fff;
}
');
?>
<div class="text-center">
    <p>ニチアサッターは、ニチアサ実況をより快適に行うためのTwitterクライアントです。</p>
    <p>ニチアサったーで快適な実況生活を始めましょう！</p>
</div>
<?php 
    $authAuthChoice = yii\authclient\widgets\AuthChoice::begin([
        'baseAuthUrl' => ['site/auth'],
        'popupMode' => false,
    ]);
    $client = $authAuthChoice->getClients()['twitter']; // twitterしか使わないので、1件固定で取得
?>
    <div class="text-center">
        <?= Html::a(FontAwesome::widget(['icon' => 'twitter']).' ログインして始める', $authAuthChoice->createClientUrl($client), ['class' => 'btn btn-twitter btn-lg']) ?>
    </div>
<?php 
    yii\authclient\widgets\AuthChoice::end();
    unset(Yii::$app->assetManager->bundles['yii\authclient\widgets\AuthChoiceStyleAsset']); // 不要なassetsは読み込まない
?>
