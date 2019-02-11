<?php

$this->title = 'My Cart';
?>
<?php //var_dump($products, $quantity, $sum);die(); ?>
<?php //echo $quantity; ?>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="<?= \yii\helpers\Url::to(['/']) ?>">Home</a></span> / <span>Shopping Cart</span>
                </p>
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
                    <div class="one-eight text-center">
                        <span>Total</span>
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
                                    <span class="price">$120.00</span>
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
        <div class="row">
            <div class="col-lg-8">
                <form method="post" class="colorlib-form">
                    <h2>Billing Details</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="country">Select Country</label>
                                <div class="form-field">
                                    <i class="icon icon-arrow-down3"></i>
                                    <select name="people" id="people" class="form-control">
                                        <option value="#">Select country</option>
                                        <option value="#">Alaska</option>
                                        <option value="#">China</option>
                                        <option value="#">Japan</option>
                                        <option value="#">Korea</option>
                                        <option value="#">Philippines</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="companyname">Company Name</label>
                                <input type="text" id="companyname" class="form-control" placeholder="Company Name">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="fname">Address</label>
                                <input type="text" id="address" class="form-control" placeholder="Enter Your Address">
                            </div>
                            <div class="form-group">
                                <input type="text" id="address2" class="form-control" placeholder="Second Address">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="companyname">Town/City</label>
                                <input type="text" id="towncity" class="form-control" placeholder="Town or City">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stateprovince">State/Province</label>
                                <input type="text" id="fname" class="form-control" placeholder="State Province">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lname">Zip/Postal Code</label>
                                <input type="text" id="zippostalcode" class="form-control" placeholder="Zip / Postal">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">E-mail Address</label>
                                <input type="text" id="email" class="form-control" placeholder="State Province">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone">Phone Number</label>
                                <input type="text" id="zippostalcode" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="radio">
                                    <label><input type="radio" name="optradio"> Create an Account? </label>
                                    <label><input type="radio" name="optradio"> Ship to different address</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cart-detail">
                            <h2>Cart Total</h2>
                            <ul>
                                <?php
                                if (!empty($qty) && !empty($sum)) {
                                    ?>

                                    <li><span>Quantity</span> <span><?= $qty ?></span></li>
                                    <li><span>Total</span> <span><?= $sum ?></span></li>
                                <?php
                                }else {
                                ?>
                                <li><span>Quantity</span></li>
                                <li><span>Total</span></li>
                                <?php
                                }
                                ?>

                            </ul>
                        </div>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-md-12">
                        <div class="cart-detail">
                            <h2>Payment Method</h2>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio"> Direct Bank Tranfer</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio"> Check Payment</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio"> Paypal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value=""> I have read and accept the terms and
                                            conditions</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p><a href="/site/complete" class="btn btn-primary">Place an order</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>