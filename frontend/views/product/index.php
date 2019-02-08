<?php

$this->title = 'Product Details';
?>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span>Product Details</span></p>
            </div>
        </div>
    </div>
</div>


<div class="colorlib-product">
    <div class="container">
        <div class="row row-pb-lg product-detail-wrap">
            <div class="col-sm-8">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                          </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="<?= \yii\helpers\Url::to(['/']) . 'images/uploads/products/' . $product['image'] ?>" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="<?= \yii\helpers\Url::to(['/']) . 'images/uploads/products/' . $product['image'] ?>" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="<?= \yii\helpers\Url::to(['/']) . 'images/uploads/products/' . $product['image'] ?>" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-desc">
                    <h3><?= $product['title'] ?></h3>
                    <div class="desc">
                        <?php
                        if($product['sale_price']){
                            ?>
                            <p class="price"><span><del><?= $product['price']?></del></span></p>
                            <p class="price"><span><?= $product['sale_price']?></span></p>
                            <?php
                        }else {
                            ?>
                            <p class="price"><span><?= $product['price']?></span></p>
                            <?php
                        }
                        ?>
                    </div>
<!--                    <p class="price">-->
<!--                        <span>--><?//= $product['price'] ?><!--</span>-->
<!--                    </p>-->
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                        unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                        decided to leave for the far World of Grammar.</p>
                    <div class="size-wrap">
                        <div class="block-26 mb-2">
                            <h4>Size</h4>
                            <ul>
                                <li><a href="#">35</a></li>
                                <li><a href="#">36</a></li>
                                <li><a href="#">37</a></li>
                                <li><a href="#">38</a></li>
                                <li><a href="#">39</a></li>
                                <li><a href="#">40</a></li>
                                <li><a href="#">41</a></li>
                                <li><a href="#">42</a></li>
                                <li><a href="#">43</a></li>
                                <li><a href="#">44</a></li>
                                <li><a href="#">45</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="input-group mb-4"></div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p class="addtocart"><a href="cart.html" class="btn btn-primary btn-addtocart"><i
                                        class="icon-shopping-cart"></i> Add to Cart</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-12 pills">
                        <div class="bd-example bd-example-tabs">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill"
                                       href="#pills-description" role="tab" aria-controls="pills-description"
                                       aria-expanded="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill"
                                       href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
                                       aria-expanded="true">Manufacturer</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane border active " id="pills-description" role="tabpanel"
                                     aria-labelledby="pills-description-tab">
                                    <p><?= $product['description'] ?></p>

                                </div>

                                <div class="tab-pane border" id="pills-manufacturer" role="tabpanel"
                                     aria-labelledby="pills-manufacturer-tab">
                                    <p><?= $product['manufacturer'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
