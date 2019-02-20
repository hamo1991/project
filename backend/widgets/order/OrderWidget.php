<?php


namespace backend\widgets\order;
use Yii;
use common\models\Orders;

class OrderWidget extends \yii\bootstrap\Widget {

    public function run() {
        $orders = Orders::find()->count();
        return $orders;
    }

}