<?php


namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Products;
use common\models\Cart;
use common\models\Brands;
use common\models\Orders;
use common\models\Orderitems;
use common\widgets\Alert;

class CartController extends Controller {

    public function beforeAction($action) {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('@web/site/login');
        }
        return parent::beforeAction($action);
    }

    public function actionIndex() {
        $user = Yii::$app->user->id;
        $cart = Cart::find()->with('product')->where(['user_id' => $user])->asArray()->all();
        $brands = Brands::find()->asArray()->all();
        $order = new Orders();
        if ($order->load(Yii::$app->request->post())) {
            $order->qty = count($cart);
            $order->user_id = $user;
            $total =0;
            foreach ($cart as $c) {
                if (!empty($c['product']['sale_price'])) {
                    $total = ($c['product']['sale_price'] + $total) * $c['quantity'];
                } else {
                    $total = ($c['product']['price'] + $total) * $c['quantity'];
                }

            }
            $order->total = $total;
            if ($order->save()) {
                $this->saveOrederItems($cart, $order->id);
                \Yii::$app->mailer->compose('order',['cart' => $cart])
                    ->setFrom(['hambardzum1991@mail.ru' => 'Shoes.com'])
                    ->setTo($order->email)
                    ->setSubject('Shop')
                    ->send();
                foreach ($cart as $c) {
                    $user_id = $c['user_id'];
                    Cart::deleteAll(['user_id' => $user_id]);
                    Yii::$app->session->setFlash('success','Your order is complete, Please check the mail');
                    return $this->refresh();
                }
            }else {
                Yii::$app->session->setFlash('error','Please try later');
            }

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
            return Yii::$app->session->setFlash('error', 'Please Login');
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
        if (Yii::$app->request->get('product_id')) {
            $product_id = Yii::$app->request->get('product_id');
            if (!empty($product_id)) {
                Cart::deleteAll(['product_id' => $product_id]);
            }
            $this->redirect('/cart');
        }
        if (Yii::$app->request->get('user')) {
            $user_id = Yii::$app->request->get('user');
            if (!empty($user_id)) {
                Cart::deleteAll(['user_id' => $user_id]);
            }

            $this->redirect('/cart');
        }
    }

    public function actionCheckout() {
        return $this->render('checkout');
    }


    public function actionComplete() {
        return $this->render('complete');
    }


    protected function saveOrederItems($items, $order_id)
    {
        foreach ($items as $id => $item) {
            $order_items = new Orderitems();
            $order_items->orders_id = $order_id;
            $order_items->product_id = $item['product_id'];
            $order_items->title = $item['product']['title'];
            $order_items->price = $item['product']['price'];
            $order_items->qty_item = $item['quantity'];
            $order_items->sum_item = $item['product']['price'] * $item['quantity'];
            $order_items->save();
        }
    }

}