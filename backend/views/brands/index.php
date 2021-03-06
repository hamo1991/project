<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\BrandsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Brands';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brands-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Brands', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php \yii\widgets\Pjax::begin();?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//
//            'id',
            'title',
            'description:ntext',
//            'image',
            [
                'attribute' => 'image',
                'format' => 'raw',
                'filter' => '',
                'value' => function($model){
                    return Html::img(\yii\helpers\Url::to('/frontend/web/images/uploads/brands/'. $model->image),['width' => '100px','height' => '70px',]);
                }
            ] ,

            //'slug',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php  \yii\widgets\Pjax::end();?>
</div>
