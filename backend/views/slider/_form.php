<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Slider */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

<!--    --><?php
//    echo $form->field($model, 'title')->widget(CKEditor::className(),[
//        'editorOptions' => [
//            'preset' => 'full',
//            'inline' => false,
//        ],
//    ]);
//    ?>
<!---->
<!--    --><?php
//    echo $form->field($model, 'description')->widget(CKEditor::className(),[
//        'editorOptions' => [
//            'preset' => 'full',
//            'inline' => false,
//        ],
//    ]);
//    ?>
<!---->
<!--    --><?php
//    echo $form->field($model, 'content')->widget(CKEditor::className(),[
//        'editorOptions' => [
//            'preset' => 'full',
//            'inline' => false,
//        ],
//    ]);
//    ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
