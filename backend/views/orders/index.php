<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'created_at',
//            'updated_at',
            'qty',
            'total',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function($data){
                    return !$data->status ? '<span class="text-danger">Is Active</span>' : '<span class="text-success">Completed</span>';
                }
            ] ,
            'name',
            //'email:email',
            //'phone',
            //'address',
            //'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
