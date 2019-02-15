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
                            <img src="<?= \yii\helpers\Url::to(['/']) . 'images/uploads/products/' . $product['image'] ?>"
                                 class="img-fluid" alt="Product image">
                        </div>
                    </div>
                    <?php
                    if (!empty($productImages)) {
                        foreach ($productImages as $image) {
                            ?>
                            <div class="item">
                                <div class="product-entry border">
                                    <img src="<?= \yii\helpers\Url::to(['/']) . 'images/uploads/products/' . $image['image'] ?>"
                                         class="img-fluid" alt="Product images">
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-desc">
                    <h3><?= $product['title'] ?></h3>
                    <div class="desc">
                        <?php
                        if ($product['sale_price']) {
                            ?>
                            <p class="price"><span><del><?= $product['price'] ?></del></span></p>
                            <p class="price"><span><?= $product['sale_price'] ?></span></p>
                            <?php
                        } else {
                            ?>
                            <p class="price"><span><?= $product['price'] ?></span></p>
                            <?php
                        }
                        ?>
                    </div>
                    <p><?= $product['content'] ?></p>
                    <div class="size-wrap">
                        <div class="block-26 mb-2">
                            <h4>Sizes</h4>
                            <ul>
                                <?php
                                $sizes = explode(',',$product['sizes']);
                                foreach ($sizes as $size) {
                                    ?>
                                    <li><a><?= $size ?></a></li>
                                <?php
                                }

                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="block-26">
                        <h4>Quantity</h4>
                    </div>
                    <form action="<?= \yii\helpers\Url::to(['/']) . 'site/add-cart/' . $product['slug'] ?>">
                        <div class="input-group mb-4">
                            <button type="button" class="quantity-left-minus btn" data-type="minus" data-field=""><i class="icon-minus2"></i></button>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="<?= $product['quantity'] ?>">
                            <span class="input-group-btn ml-1">

                     	</span>
                            <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                <i class="icon-plus2"></i>
                            </button>
                        </div>
                        <?php
                        if (!Yii::$app->user->isGuest) {
                            ?>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <p class="addtocart"><button id="btn" type="submit" class="btn-primary btn-addtocart"><i class="icon-shopping-cart"></i>Add to Cart</button></p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </form>
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
