<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Products */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-view">

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
            'title',
            'description:html',
            'manufacturer:html',
            'content:html',
            'price',
            'sale_price',
            'sku',
            'quantity',
            'available_stock',
//            'is_new',
//            'is_sale',
            'sizes',
            [
                'attribute' => 'image',
                'format' => 'raw',
                'filter' => '',
                'value' => function($model){
                    return Html::img(\yii\helpers\Url::to('/frontend/web/images/uploads/products/'. $model->image),['width' => '100px','height' => '100px',]);
                }
            ] ,

            [
                'attribute' => 'cat_id',
                'filter' => '',
                'value' => function($model){
                    return \common\models\Categories::find()->where(['id' => $model->cat_id])->one()->title;
                }
            ] ,
            [
                'attribute' => 'brand_id',
                'filter' => '',
                'value' => function($model){
                    return \common\models\Brands::find()->where(['id' => $model->brand_id])->one()->title;
                }
            ] ,

//            [
//                'attribute' => 'col_id',
//                'filter' => '',
//                'value' => function($model){
//                    return \common\models\Colors::find()->where(['id' => $model->col_id])->one()->title;
//                }
//            ] ,

//            'slug',
//            'best',
        ],
    ]) ?>

</div>
