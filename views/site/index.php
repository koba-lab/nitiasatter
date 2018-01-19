<?php
use yii\helpers\Html;
/**
 * @var $this yii\web\View
 * @var $form app\models\StatusForm
 */
$this->title = 'ニチアサッター - ニチアサ実況用Twitterクライアント';
?>
<div class="l-site-index">
    <div class="l-main-content">
        <div>
            <p>ニチアサッターは、ニチアサ実況をより快適に行うためのTwitterクライアントです。</p>
            <p>ニチアサったーで快適な実況生活を始めましょう！</p>
        </div>
<?php if (Yii::$app->user->isGuest): ?>
        <?= yii\authclient\widgets\AuthChoice::widget([
            'baseAuthUrl' => ['site/auth'],
            'popupMode' => false,
        ]) ?>
<?php else: ?>
        <div class="l-status-form">
            <?= Html::beginForm() ?>
                <div class="form-group">
                    <?= Html::activeTextarea($form, 'status', ['class' => 'form-control', 'placeholder' => '実況してみよう！']) ?>
                </div>
                <?= Html::submitButton('つぶやく！', ['class' => 'btn btn-primary']) ?>
            <?= Html::endForm() ?>
        </div>
        <div>
            ログイン中
            <?= var_export(Yii::$app->authClientCollection->getClient('twitter')->getUserAttributes(), TRUE) ?>
        </div>
<?php endif; ?>
    </div>
</div>
