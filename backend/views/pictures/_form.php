<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $upload common\models\Pictures */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pictures-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($upload, 'image[]')->fileInput(['multiple' => true]) ?>
    <?= $form->field($upload, 'colors')->textInput() ?>
    <?= $form->field($upload, 'product_id')->dropDownList($products,['prompt' => 'Please select product']); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
