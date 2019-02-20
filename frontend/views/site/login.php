<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
$this->title = 'Login';

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div class="container">
    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success">
            <button aria-hidden="true" style="display: block"  data-dismiss="alert" class="close" type="button">X</button>
            <?= Yii::$app->session->getFlash('success') ?>
        </div>
    <?php endif; ?>


    <?php if (Yii::$app->session->hasFlash('error')): ?>
        <div class="alert alert-danger">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">X</button>
            <?= Yii::$app->session->getFlash('error') ?>
        </div>
    <?php endif; ?>
    <div class="breadcrumbs">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="<?= \yii\helpers\Url::to(['/']) ?>">Home</a></span> / <span>LOGIN</span></p>
            </div>
        </div>

    </div>
    <div class="site-login animated fadeInUp">
        <h1 style="text-align: center"><?= Html::encode($this->title) ?></h1>

        <p style="text-align: center">Please fill out the following fields to login:</p>

        <div class="row ">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group text-center">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>

    </div>

</div>
