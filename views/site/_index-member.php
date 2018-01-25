<?php 
use yii\helpers\Html;
/**
 * @var $this yii\web\View
 * @var $form app\models\StatusForm
 */
$this->registerCss('
.l-status-form textarea {
    height: 20vh;
    min-height: 6rem;
}
.l-status-form .nav-pills a {
    font-size: .9rem;
}
.l-status-form .nav-pills .nav-link.active {
    border-radius: 2rem;
}
');
?>
<div class="row">
    <div class="col-md-5">
        <div class="l-status-form">
            <?= Html::beginForm() ?>
                <div class="form-group">
                    <?= Html::activeTextarea($form, 'status', ['class' => 'form-control', 'placeholder' => '実況してみよう！']) ?>
                </div>
                <div class="form-group">
                    <?= Html::activeInput('text', $form, 'tag', ['class' => 'form-control mb-2']) ?>
                    <div class="nav nav-pills nav-justified">
                        <a href="#" class="nav-item nav-link active">プリキュア</a>
                        <a href="#" class="nav-item nav-link">仮面ライダー</a>
                        <a href="#" class="nav-item nav-link">ヒーロー戦隊</a>
                    </div>
                </div>
                <div class="">
                    <?= Html::submitButton('つぶやく！', ['class' => 'btn btn-danger']) ?>
                </div>
            <?= Html::endForm() ?>
        </div>
    </div>
    <div class="col-md-7">
        ※タイムラインとかを実装する予定
    </div>
</div>
<!-- <?= var_export(Yii::$app->authClientCollection->getClient('twitter')->getUserAttributes(), TRUE) ?> -->
