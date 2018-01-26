<?php 
use yii\helpers\Html;
use app\widgets\FontAwesome;
/**
 * @var $this yii\web\View
 * @var $form app\models\StatusForm
 */
$this->registerCss('
.heading {
    color: #999;
    font-size: .8rem;
}
.l-status-form textarea {
    height: 20vh;
    min-height: 5rem;
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
                    <?= Html::submitButton('つぶやく！', ['class' => 'btn btn-danger']) ?>
                </div>
                <div class="form-group">
                    <h6 class="heading">番組を選ぶ</h6>
                    <div class="nav nav-pills nav-justified mb-3">
                        <a href="#" class="nav-item nav-link active"><?= FontAwesome::widget(['icon' => 'hashtag']) ?>プリキュア</a>
                        <a href="#" class="nav-item nav-link"><?= FontAwesome::widget(['icon' => 'hashtag']) ?>仮面ライダー</a>
                        <a href="#" class="nav-item nav-link"><?= FontAwesome::widget(['icon' => 'hashtag']) ?>ヒーロー戦隊</a>
                    </div>
                    <h6 class="heading">タグをカスタマイズする</h6>
                    <?= Html::activeInput('text', $form, 'tag', ['class' => 'form-control']) ?>
                </div>
            <?= Html::endForm() ?>
        </div>
    </div>
    <div class="col-md-7">
        ※タイムラインとかを実装する予定
    </div>
</div>
<!-- <?= var_export(Yii::$app->authClientCollection->getClient('twitter')->getUserAttributes(), TRUE) ?> -->
