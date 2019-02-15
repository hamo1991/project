<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\BrandsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rules-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rules', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'id',
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

            [
                'attribute' => 'color_id',
                'filter' => '',
                'value' => function($model){
                    return \common\models\Colors::find()->where(['id' => $model->color_id])->one()->title;
                }
            ] ,

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
