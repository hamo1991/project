<?php


namespace frontend\widgets\cart;
use Yii;
use common\models\Cart;

class CartWidget extends \yii\bootstrap\Widget {

    public function run() {

//        $cart = Cart::find()->where(['user_id' => Yii::$app->user->id])->asArray()->all();
//        $count = count($cart);
//
//        return $count;


        $sum = 0;
        $count = 0;
        $cart = Cart::find()->where(['user_id' => Yii::$app->user->id])->asArray()->all();
        foreach ($cart as $item){

            $sum += $item['quantity'];
        }

        $count  += $sum;
        return $count;
    }

}