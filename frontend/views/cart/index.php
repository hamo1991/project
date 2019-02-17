<?php

$this->title = 'My Cart';
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php //var_dump($cart);die(); ?>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span>Shopping Cart</span></p>
            </div>
        </div>
    </div>
</div>
<div class="colorlib-product">
    <div class="container">
        <div class="row row-pb-lg">
            <div class="col-md-12">

                <div class="table-responsive">
                    <?php
                    if (!empty($cart)) {
                        $total = 0;
                        ?>
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
                            }else {
                                $total = ($c['product']['price'] + $total) * $c['quantity'];
                            }

                            ?>

                            <div class="product-cart d-flex">
                                <div class="one-forth">
                                    <a href="<?= \yii\helpers\Url::to(['/']) . 'products/product/' . $c['product']['slug'] ?>"> <div class="product-img"

                                         style="background-image: url(<?= \yii\helpers\Url::to(['/']) . 'images/uploads/products/' . $c['product']['image'] ?>);
                                               display: block">

                                    </div>
                                    </a>
                                    <div class="display-tc">
                                        <h3><a href="<?= \yii\helpers\Url::to(['/']) . 'products/product/' . $c['product']['slug'] ?>"><?= $c['product']['title'] ?></a></h3>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <?php
								     if (!empty($c['product']['sale_price'])) {
								         ?>
								          <span class="price"><?= $c['product']['sale_price']?></span>
								         <?php
								     }else {
								         ?>
								         <span class="price"><?= $c['product']['price'] ?></span>
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
								          <span class="price"><?= $c['product']['sale_price'] * $c['quantity'] ?></span>
								         <?php
								     }else {
								         ?>
								         <span class="price"><?= $c['product']['price'] * $c['quantity'] ?></span>
								         <?php
								     }
								     ?>
								    </div>
							    </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <a data-product_id="<?= $c['product']['id'] ?>" class="closed"></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                </div>
            </div>
        </div>
        <div class="row row-pb-lg">
            <div class="col-md-12">
                <div class="total-wrap">
                    <div class="row">
            <div class="col-md-6">
                <div class="contact-wrap">

                    <?php $form = ActiveForm::begin(); ?>


                    <?= $form->field($order, 'name')->textInput() ?>

                    <?= $form->field($order, 'email')->input('email') ?>

                    <?= $form->field($order, 'phone')->input('number') ?>

                    <?= $form->field($order, 'address')->textInput() ?>



                    <div class="form-group">
                        <?= Html::submitButton('Proceed to checkout', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>

                        <div class="col-md-6">
                            <div class="cart-detail">
                                <h2>Cart Total</h2>
                                <ul>
                                    <li><span>Products</span> <span><?= count($cart) ?></span></li>
                                    <li><span>Total</span> <span><?= $total ?></span></li>
                                </ul>

                             <div class="col-sm-3">
                            <form action="<?= \yii\helpers\Url::to(['@web/']) . 'cart/delete'?>" method="get">

                            <input type="hidden" name="user" value="<?= $c['user_id'] ?>">
                                <button type="submit" class="btn btn-primary">Remove all</button>
                            </form>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <a href="<?= \yii\helpers\Url::to(['/']) . 'products/' . $brand['slug'] ?>"><img
                                        src="<?= \yii\helpers\Url::to(['/']) . 'images/uploads/brands/' . $brand['image'] ?>"
                                        class="img-fluid"
                                        alt="brand images"></a>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
        </div>
    </div>
        <?php
} else {
         ?>
         <h2 class="cart">Your cart is empty</h2>
    <?php
    }
?>