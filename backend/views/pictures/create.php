<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $upload common\models\Pictures */

$this->title = 'Create Pictures';
$this->params['breadcrumbs'][] = ['label' => 'Pictures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pictures-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'upload' => $upload,
        'products' => $products
    ]) ?>

</div>
