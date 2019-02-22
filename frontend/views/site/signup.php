<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */
$this->title = 'Signup';

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div class="container">
    <div class="breadcrumbs">

        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="<?= \yii\helpers\Url::to(['/']) ?>">Home</a></span> / <span>SIGNUP</span></p>
            </div>
        </div>

    </div>
    <div class="site-signup animated fadeInUp">
        <h1 style="text-align: center;font-size: 50px"><?= Html::encode($this->title) ?></h1>

        <p style="text-align: center">Please fill out the following fields to signup:</p>

        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group text-center">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>