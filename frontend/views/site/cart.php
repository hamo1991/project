<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="index.html">Home</a></span> / <span>Shopping Cart</span></p>
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
                <div class="product-cart d-flex">
                    <div class="one-forth">
                        <div class="product-img"
                             style="background-image: url(<?= \yii\helpers\Url::to(['/']) ?>images/item-6.jpg);">
                        </div>
                        <div class="display-tc">
                            <h3>Product Name</h3>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <span class="price">$68.00</span>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <input type="text" id="quantity" name="quantity"
                                   class="form-control input-number text-center" value="1" min="1" max="100">
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <span class="price">$120.00</span>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <a href="#" class="closed"></a>
                        </div>
                    </div>
                </div>
                <div class="product-cart d-flex">
                    <div class="one-forth">
                        <div class="product-img"
                             style="background-image: url(<?= \yii\helpers\Url::to(['/']) ?>images/item-7.jpg);">
                        </div>
                        <div class="display-tc">
                            <h3>Product Name</h3>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <span class="price">$68.00</span>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <form action="#">
                                <input type="text" name="quantity" class="form-control input-number text-center"
                                       value="1" min="1" max="100">
                            </form>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <span class="price">$120.00</span>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <a href="#" class="closed"></a>
                        </div>
                    </div>
                </div>
                <div class="product-cart d-flex">
                    <div class="one-forth">
                        <div class="product-img"
                             style="background-image: url(<?= \yii\helpers\Url::to(['/']) ?>images/item-8.jpg);">
                        </div>
                        <div class="display-tc">
                            <h3>Product Name</h3>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <span class="price">$68.00</span>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <input type="text" id="quantity" name="quantity"
                                   class="form-control input-number text-center" value="1" min="1" max="100">
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <span class="price">$120.00</span>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <a href="#" class="closed"></a>
                        </div>
                    </div>
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
                                <li>
                                    <span>Subtotal</span> <span>$100.00</span>
                                    <ul>
                                        <li><span>1 x Product Name</span> <span>$99.00</span></li>
                                        <li><span>1 x Product Name</span> <span>$78.00</span></li>
                                    </ul>
                                </li>
                                <li><span>Shipping</span> <span>$0.00</span></li>
                                <li><span>Order Total</span> <span>$180.00</span></li>
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
                                        <label><input type="checkbox" value=""> I have read and accept the terms and conditions</label>
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