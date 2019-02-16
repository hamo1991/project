<?php


namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Products;
use common\models\Cart;
use common\models\Brands;
use common\models\Orders;
use common\models\Orderitems;

class CartController extends Controller {

    public function beforeAction($action) {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('@web/site/login');
        }
        return parent::beforeAction($action);
    }

    public function actionIndex() {
        $user = Yii::$app->user->id;
        $cart = Cart::find()->with('product')->where(['user_id'=>$user])->asArray()->all();
        $brands = Brands::find()->asArray()->all();
        $order = new Orders();
        if ($order->load(Yii::$app->request->post())) {
            var_dump((Yii::$app->request->post()));die();
        }
        return $this->render('index', [
            'brands' => $brands,
            'cart' => $cart,
            'order' => $order
        ]);

    }

    public function actionAdd() {

        $id = (int)Yii::$app->request->get('id');
        $qty = (int)Yii::$app->request->get('quantity');
        $qty = !$qty ? 1 : $qty;
        if (Yii::$app->user->isGuest) {
            return Yii::$app->session->setFlash('ERROR', 'Please Login');
        } else {
            if (!empty($id) && !empty($qty)) {
                $user = Yii::$app->user->id;
                $product = Products::findOne($id);
                if (!empty($product)) {
                    $errors = [];
                    $cart = Cart::findOne(['product_id' => $product->id, 'user_id' => $user]);
                    if (!empty($cart)) {
                        $cart->quantity += $qty;
                        $cart->save(false);
                    } else {
                        $new_cart = new Cart();
                        $new_cart->product_id = $product->id;
                        $new_cart->quantity = $qty;
                        $new_cart->user_id = $user;
                        if (!$new_cart->save()) {
                            $errors[] = $new_cart->errors;
                        }
                    }

                    $this->redirect('/cart');
                }
            }
        }
    }


    public function actionDelete() {
        if (Yii::$app->request->isAjax) {
            $product_id = Yii::$app->request->get('product_id');
            Cart::deleteAll(['product_id' => $product_id]);
            $this->redirect('/cart');
        }
        if ( Yii::$app->request->get('user')) {
            $user_id = Yii::$app->request->get('user');
            Cart::deleteAll(['user_id' => $user_id]);
            $this->redirect('/cart');
        }
    }

    public function actionCheckout() {
        return $this->render('checkout');
    }


    public function actionComplete() {
        return $this->render('complete');
    }


}