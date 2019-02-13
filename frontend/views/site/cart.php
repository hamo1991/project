<?php

$this->title = 'My Cart';
?>
<?php
//$session = Yii::$app->session;
//
//
//var_dump($products,$sum);die();


?>

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
                    <div class="one-eight text-center px-4">
                        <span>Remove</span>
                    </div>
                </div>
                <div class="table-responsive">
                    <?php
                    if (!empty($products)) {
                        foreach ($products as $id => $product) {
                            ?>

                            <div class="product-cart d-flex">
                                <div class="one-forth">
                                    <div class="product-img"
                                         style="background-image: url(<?= \yii\helpers\Url::to(['/']) . 'images/uploads/products/' . $product['img'] ?>);
                                                 display: block">
                                    </div>
                                    <div class="display-tc">
                                        <h3><?= $product['name'] ?></h3>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <span class="price"><?= $product['price'] ?></span>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <span class="price"><?= $product['qty'] ?></span>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <a href="#" data-product_id="<?= $id ?>" class="closed"></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row row-pb-lg">
            <div class="col-md-12">
                <div class="total-wrap">
                    <div class="row">
                        <div class="col-sm-8">
                            <form action="#">
                                <div class="row form-group">
                                    <div class="col-sm-9">
                                        <input type="text" name="quantity" class="form-control input-number"
                                               placeholder="Your Coupon Number...">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="submit" value="Apply Coupon" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="cart-detail">
                                <h2>Cart Total</h2>
                                <ul>
                                    <?php
                                    if (!empty($qty) && !empty($sum)) {
                                        ?>

                                        <li><span>Quantity</span> <span><?= $qty ?></span></li>
                                        <li><span>Total</span> <span><?= $sum ?></span></li>
                                        <?php
                                    } else {
                                        ?>
                                        <li><span>Quantity</span></li>
                                        <li><span>Total</span></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <input type="submit" value="Proceed to checkout" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>