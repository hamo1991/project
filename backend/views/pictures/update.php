<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $upload common\models\Pictures */

$this->title = 'Update Pictures';
$this->params['breadcrumbs'][] = ['label' => 'Pictures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $upload->id, 'url' => ['view', 'id' => $upload->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pictures-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'upload' => $upload,
        'products' => $products
    ]) ?>

</div>
