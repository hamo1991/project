<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>


    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
<?php
    echo $form->field($model, 'description')->widget(CKEditor::className(),[
    'editorOptions' => [
    'preset' => 'full',
    'inline' => false,
    ],
    ]);
?>

    <?php
    echo $form->field($model, 'manufacturer')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ]);
    ?>
<!--    --><? //= $form->field($model, 'manufacturer')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'image')->fileInput(['multiple' => true]) ?>

    <?= $form->field($model, 'sale_price')->textInput() ?>

    <?= $form->field($model, 'sku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'available_stock')->textInput() ?>

    <?= $form->field($model, 'is_new')->checkbox([ '0', '1' ]) ?>

    <?= $form->field($model, 'is_sale')->checkbox([ '0', '1' ]) ?>

    <?= $form->field($model, 'best')->checkbox([ '0', '1' ]) ?>


    <?= $form->field($model, 'cat_id')->dropDownList($categories,['prompt' => 'Please select category']); ?>

    <?= $form->field($model, 'brand_id')->dropDownList($brands,['prompt' => 'Please select brand']); ?>

   <!-- <?//= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
