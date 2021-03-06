<?php

$this->title = 'My Cart';

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Cart;


?>

<div class="breadcrumbs">
    <div class="container">
        <?php if (Yii::$app->session->hasFlash('success')): ?>
            <div class="alert alert-success">
                <button aria-hidden="true" style="display: block" data-dismiss="alert" class="close" type="button">X
                </button>
                <?= Yii::$app->session->getFlash('success') ?>
            </div>
        <?php endif; ?>


        <?php if (Yii::$app->session->hasFlash('error')): ?>
            <div class="alert alert-danger">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">X</button>
                <?= Yii::$app->session->getFlash('error') ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col">
                <p class="bread"><span>Shopping Cart</span></p>
            </div>
        </div>
    </div>
</div>

<div class="breadcrumbs-two animated pulse">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumbs-img"
                     style="background-image: url('/images/shopping.jpg');">
                    <h2 style="color: white">Online SHOP</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
if (!empty($cart)) {
    $total = 0;
    ?>
    <div class="colorlib-product">
        <div class="container">
            <div class="row row-pb-lg">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <div class="product-name d-flex">
                            <div class="one-forth text-left px-4">
                                <span>Product Details</span>
                            </div>
                            <div class="one-eight text-center">
                                <span>Price</span>
                            </div>
                            <div class="one-eight text-center">
                                <span>Quantity</span>
                            </div>
                            <div class="one-eight text-center">
                                <span>Total</span>
                            </div>
                            <div class="one-eight text-center px-4">
                                <span>Remove</span>
                            </div>
                        </div>
                        <?php
                        foreach ($cart as $c) {
                            if (!empty($c['product']['sale_price'])) {
                                $total = ($c['product']['sale_price'] + $total) * $c['quantity'];
                            } else {
                                $total = ($c['product']['price'] + $total) * $c['quantity'];
                            }

                            ?>

                            <div class="product-cart d-flex">
                                <div class="one-forth">
                                    <a href="<?= \yii\helpers\Url::to(['/']) . '/products/product/' . $c['product']['slug'] ?>">
                                        <div class="product-img"
                                             style="background-image: url(<?='/images/uploads/products/' . $c['product']['image'] ?>);
                                                     display: block"></div>
                                    </a>
                                    <div class="display-tc">
                                        <h3>
                                            <a href="<?= \yii\helpers\Url::to(['/']) . '/products/product/' . $c['product']['slug'] ?>"><?= $c['product']['title'] ?></a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <?php
                                        if (!empty($c['product']['sale_price'])) {
                                            ?>
                                            <span class="price"><?= $c['product']['sale_price'] ?>֏</span>
                                            <?php
                                        } else {
                                            ?>
                                            <span class="price"><?= $c['product']['price'] ?>֏</span>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <span class="price"><?= $c['quantity'] ?></span>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <?php
                                        if (!empty($c['product']['sale_price'])) {
                                            ?>
                                            <span class="price"><?= $c['product']['sale_price'] * $c['quantity'] ?>֏</span>
                                            <?php
                                        } else {
                                            ?>
                                            <span class="price"><?= $c['product']['price'] * $c['quantity'] ?>֏</span>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <a href="<?= \yii\helpers\Url::to(['/cart/delete', 'product_id' => $c['product']['id']]) ?>"
                                           class="closed"></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div id="checkout-div" class="row row-pb-lg">
                <div class="col-md-12">
                    <div class="total-wrap">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-wrap">
                                    <h2 style="text-align: center">Fill in the data</h2>
                                    <?php

                                    $userName = strtoupper(Yii::$app->user->identity->username);
                                    $userEmail = Yii::$app->user->identity->email;

                                    ?>
                                    <?php $form = ActiveForm::begin(); ?>

                                    <?= $form->field($order, 'name')->textInput(['readonly' => true, 'value' => $userName]) ?>

                                    <?= $form->field($order, 'email')->input('email', ['readonly' => true, 'value' => $userEmail]) ?>

                                    <?= $form->field($order, 'phone')->input('number') ?>

                                    <?= $form->field($order, 'address')->textInput() ?>

                                    <div class="form-group text-center">
                                        <?= Html::submitButton('Proceed to checkout', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                    </div>

                                    <?php ActiveForm::end(); ?>

                                    <form  id="paypal_checkout" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                                        <input name="cmd" value="_cart" type="hidden">
                                        <input name="upload" value="1" type="hidden">
                                        <input name="no_note" value="tyty" type="hidden">
                                        <input name="bn" value="PP-BuyNowBF" type="hidden">
                                        <input name="tax" value="0" type="hidden">
                                        <input name="rm" value="2" type="hidden">

                                        <input name="business" value="jeremy@jdmweb.com" type="hidden">
                                        <input name="handling_cart" value="1" type="hidden">
                                        <input name="currency_code" value="USD" type="hidden">
                                        <input name="lc" value="GB" type="hidden">
                                        <input name="return" value="<?= \yii\helpers\Url::to(['/']) . '/cart/' ?>" type="hidden">
                                        <input name="cbt" value="<?= \yii\helpers\Url::to(['/']) . '/site/' ?>" type="hidden">
                                        <input name="cancel_return" value="<?= \yii\helpers\Url::to(['/']) . '/cart/' ?>" type="hidden">
                                        <input name="custom" value="" type="hidden">

                                        <?php
                                        if (!empty($cart)) {
                                            foreach ($cart as $c) {
//
                                                ?>
                                                <div id="item_1" class="itemwrap">
                                                    <input name="item_name_1" value="Product name" type="hidden">
                                                    <input name="quantity_1" value="<?= $c['quantity'] ?>" type="hidden">
                                                    <input name="amount_1" value="30" type="hidden">
                                                    <input name="shipping_1" value="0" type="hidden">
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <div class="text-center">

                                            <input id="ppcheckoutbtn" value="Pay Now" class="btn btn-primary" type="submit">
                                        </div>

                                    </form>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="cart-detail">
                                    <h2 style="text-align: center">Cart Total</h2>
                                    <ul>
                                        <?php
                                        $sum = 0;
                                        $count = 0;
                                        $cart = Cart::find()->where(['user_id' => Yii::$app->user->id])->asArray()->all();
                                        foreach ($cart as $item) {
                                            $sum += $item['quantity'];
                                        }
                                        $count += $sum;
                                        ?>

                                        <li><span>Total quantity</span> <span><?= $count ?></span></li>
                                        <li><span>Total sum</span> <span><?= $total ?>֏</span></li>
                                    </ul>
                                    <div class="butflex">
                                        <div class="col-sm-3">
                                            <form action="<?= \yii\helpers\Url::to(['@web/']) . '/cart/delete' ?>"
                                                  method="get">

                                                <input type="hidden" name="user" value="<?= $c['user_id'] ?>">
                                                <button type="submit" class="btn btn-primary">Remove all</button>
                                            </form>
                                        </div>
                                        <div class="col-sm-3">
                                            <a href="<?= \yii\helpers\Url::to(['/category/mens']) ?>"
                                               class="btn btn-primary">Continue
                                                shopping</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
} else {
    ?>
    <br><br>
    <h2 id="cart">Your cart is empty</h2>
    <?php
}
?>

<div class="colorlib-partner " id="partner">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>Trusted Partners</h2>
            </div>
        </div>
        <div class="row brand-slide">
            <?php
            if (!empty($brands)) {
                foreach ($brands as $brand) {
                    ?>
                    <div class="col partner-col text-center ">
                        <a href="<?= \yii\helpers\Url::to(['/']) . '/products/' . $brand['slug'] ?>">
                            <?= \yii\helpers\Html::img("@web/images/uploads/brands/{$brand['image']}", ['alt' => "brand-image", 'class' => 'img-fluid']) ?>
                        </a>
                    </div>
                    <?php
                }
            }
            ?>

        </div>
    </div>
</div>