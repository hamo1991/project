<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>

    </p>
    <?php \yii\widgets\Pjax::begin();?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'title',
            'price',
            'sale_price',
            [
                'attribute' => 'sizes',
                'format' => 'raw',
                'filter' => ''


            ] ,
            //'sku',
            //'quantity',
            //'available_stock',
            //'is_new',
            //'is_sale',,
            [
                'attribute' => 'image',
                'format' => 'raw',
                'filter' => '',
                'value' => function($model){
                    return Html::img(\yii\helpers\Url::to('/frontend/web/images/uploads/products/'. $model->image),['width' => '100px','height' => '100px',]);
                }
            ] ,
            //'cat_id',
            //'brand_id',
            //'color_id'
            //'col_id',
            //'slug',
            //'best',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php  \yii\widgets\Pjax::end();?>
</div>
