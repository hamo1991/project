<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Pictures */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pictures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pictures-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
//            'product_id',

            [
                'attribute' => 'product_id',
                'filter' => '',
                'value' => function($model){
                    return \common\models\Products::find()->where(['id' => $model->product_id])->one()->title;
                }
            ] ,
            [
                'attribute' => 'image',
                'format' => 'raw',
                'filter' => '',
                'value' => function($model){
                    return Html::img(\yii\helpers\Url::to('/frontend/web/images/uploads/products/'. $model->image),['width' => '100px','height' => '100px',]);
                }
            ] ,
            'colors',
        ],
    ]) ?>

</div>
