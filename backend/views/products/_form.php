<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>


    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'manufacturer')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'image')->fileInput(['multiple' => true]) ?>

    <?= $form->field($model, 'sale_price')->textInput() ?>

    <?= $form->field($model, 'sku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'available_stock')->textInput() ?>

    <?= $form->field($model, 'is_new')->dropDownList([ '0' => 'No', '1' => 'Yes', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'is_sale')->dropDownList([ '0' => 'No', '1' => 'Yes', ], ['prompt' => '']) ?>


    <?= $form->field($model, 'cat_id')->dropDownList($categories,['prompt' => 'Please select category']); ?>

    <?= $form->field($model, 'brand_id')->dropDownList($brands,['prompt' => 'Please select brand']); ?>

   <!-- <?//= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
