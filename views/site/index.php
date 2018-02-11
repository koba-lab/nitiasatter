<?php
/**
 * @var $this yii\web\View
 * @var $form app\models\StatusForm
 */
$this->title = 'ニチアサッター - ニチアサ実況用Twitterクライアント';
?>
<div class="l-site-index">
    <div class="l-main-content">
<?php if (Yii::$app->user->isGuest): ?>
    <?= $this->render('_index-guest') ?>
<?php else: ?>
    <?= $this->render('_index-member', [
        'form' => $form,
        'tags' => $tags,
        'currentProgram' => $currentProgram,
    ]) ?>
<?php endif; ?>
    </div>
</div>
