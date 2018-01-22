<?php 
use yii\helpers\Html;
/**
 * @var $this yii\web\View
 * @var $form app\models\StatusForm
 */
$this->registerCss('
.l-status-form textarea {
    height: 20vh;
}
');
?>
<div class="row">
    <div class="col-md-4">
        <div class="l-status-form">
            <?= Html::beginForm() ?>
                <div class="form-group">
                    <?= Html::activeTextarea($form, 'status', ['class' => 'form-control', 'placeholder' => '実況してみよう！']) ?>
                </div>
                <div class="d-flex justify-content-between">
                    <div>
                        <?= Html::activeInput('text', $form, 'tag', ['class' => 'form-control']) ?>
                    </div>
                    <div>
                        <?= Html::submitButton('つぶやく！', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            <?= Html::endForm() ?>
        </div>
    </div>
    <div class="col-md-8">
        ※タイムラインとかを実装する予定
    </div>
</div>
<!-- <?= var_export(Yii::$app->authClientCollection->getClient('twitter')->getUserAttributes(), TRUE) ?> -->
