<?php


use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;


$this->title =Yii::t('app', 'Sign up');

?>

<h1><?= Html::encode($this->title) ?></h1>

<p><?= Yii::t('app', 'Please, register') ?></p>

<?php $registerForm = ActiveForm::begin([
    'id' => 'register-form',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n{input}\n{error}",
        'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
        'inputOptions' => ['class' => 'col-lg-3 form-control'],
        'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
    ],
]); ?>
<?= $registerForm->errorSummary($newUser) ?>
<?= $registerForm->field($newUser, 'username')->textInput(['autofocus' => true]) ?>
<?= $registerForm->field($newUser, 'email')->textInput() ?>
<?= $registerForm->field($newUser, 'password')->passwordInput(['value' => '']) ?>

<?php //= $form->field($model, 'rememberMe')->checkbox([
//    'template' => "<div class=\"offset-lg-1 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
//]) ?>

<div class="form-group">
    <div class="offset-lg-1 col-lg-11">
        <?= Html::submitButton(Yii::t('app', 'Sign up'), ['class' => 'btn btn-primary', 'name' => 'register-button']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>


