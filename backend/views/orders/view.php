<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Orderitems;

/* @var $this yii\web\View */
/* @var $model common\models\Orders */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-view">

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
            'created_at',
            'updated_at',
//            'qty',
            'total',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function($data){
                    return !$data->status ? '<span class="text-danger">Is Active</span>' : '<span class="text-success">Completed</span>';
                }
            ] ,
            'name',
            'email:email',
            'phone',
            'address',
//            'user_id',
        ],
    ]) ?>

<div class="table-responsive">
<table class="table table-hover table-striped">
    <?php
    $items = Orderitems::find()->where(['orders_id' => $model->id])->asArray()->all();

    if (!empty($items)) {
    $total = 0;
    ?>
    <thead>
    <tr>
        <th>Product name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($items as $item):?>
        <tr>
            <td><a href="<?= \yii\helpers\Url::to(['/products/view','id' => $item['product_id']])?>"><?= $item['title'] ?></a></td>
            <td><?= $item['qty_item'] ?></td>
            <td><?= $item['price'] ?></td>
            <td><?= $item['sum_item'] ?></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="3">Total price</td>
        <td><?= $model->total ?></td>
    </tr>
    </tbody>
</table>
<?php
}
?>
</div>
</div>
