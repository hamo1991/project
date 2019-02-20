<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="email-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <!---->
    <!--    <p>-->
    <!--        --><? //= Html::a('Create Email', ['create'], ['class' => 'btn btn-success']) ?>
    <!--    </p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'email:email',
            'content',
            'date',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {delete}'
            ],

        ],

    ]); ?>
    <?php Pjax::end(); ?>
</div>
