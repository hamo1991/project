<?php

$this->title = $categories[0]['title'] . " Collection";
?>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><?= $categories[0]['title'] ?> Collection</span></p>
            </div>
        </div>
    </div>
</div>
<div class="breadcrumbs-two">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumbs-img"
                     style="background-image: url(<?= \yii\helpers\Url::to(['/']) . 'images/' . $categories[0]['info_image'] ?>);">
                    <h2><?= $categories[0]['title'] ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-xl-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="side border mb-1">
                            <h3>Categories</h3>
                            <ul><?php
                                if (!empty($category)) {
                                    foreach ($category as $cat) {
                                        ?>
                                        <li>
                                            <a href="<?= \yii\helpers\Url::to(['/']) . $cat['slug'] . $cat['id'] ?>"><?= $cat['title'] ?></a>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="side border mb-1">
                            <h3>Brand</h3>
                            <ul>
                                <li><a href="#">Nike</a></li>
                                <li><a href="#">Adidas</a></li>
                                <li><a href="#">Merrel</a></li>
                                <li><a href="#">Gucci</a></li>
                                <li><a href="#">Skechers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="side border mb-1">
                            <h3>Size/Width</h3>
                            <div class="block-26 mb-2">
                                <h4>Size</h4>
                                <ul>
                                    <li><a href="#">7</a></li>
                                    <li><a href="#">7.5</a></li>
                                    <li><a href="#">8</a></li>
                                    <li><a href="#">8.5</a></li>
                                    <li><a href="#">9</a></li>
                                    <li><a href="#">9.5</a></li>
                                    <li><a href="#">10</a></li>
                                    <li><a href="#">10.5</a></li>
                                    <li><a href="#">11</a></li>
                                    <li><a href="#">11.5</a></li>
                                    <li><a href="#">12</a></li>
                                    <li><a href="#">12.5</a></li>
                                    <li><a href="#">13</a></li>
                                    <li><a href="#">13.5</a></li>
                                    <li><a href="#">14</a></li>
                                </ul>
                            </div>
                            <div class="block-26">
                                <h4>Width</h4>
                                <ul>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">W</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="side border mb-1">
                            <h3>Style</h3>
                            <ul>
                                <li><a href="#">Slip Ons</a></li>
                                <li><a href="#">Boots</a></li>
                                <li><a href="#">Sandals</a></li>
                                <li><a href="#">Lace Ups</a></li>
                                <li><a href="#">Oxfords</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="side border mb-1">
                            <h3>Colors</h3>
                            <ul>
                                <li><a href="#">Black</a></li>
                                <li><a href="#">White</a></li>
                                <li><a href="#">Blue</a></li>
                                <li><a href="#">Red</a></li>
                                <li><a href="#">Green</a></li>
                                <li><a href="#">Grey</a></li>
                                <li><a href="#">Orange</a></li>
                                <li><a href="#">Cream</a></li>
                                <li><a href="#">Brown</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-xl-9">
                <div class="row row-pb-md">

                    <?php
                    if (!empty($products)) {
                        foreach ($products as $prod) {
                            ?>

                            <div class="col-lg-4 mb-4 text-center">
                                <div class="product-entry border">
                                    <a href="#" class="prod-img">
                                        <?php if ($prod['is_new']) : ?>
                                            <img class="new-sale"
                                                 src="<?= \yii\helpers\Url::to(['/']) . 'images/new.png' ?>" alt="new">
                                        <?php endif ?>
                                        <?php if ($prod['is_sale']) : ?>
                                            <img class="new-sale"
                                                 src="<?= \yii\helpers\Url::to(['/']) . 'images/sale.png' ?>"
                                                 alt="sale">
                                        <?php endif ?>
                                        <img src="<?= \yii\helpers\Url::to(['/']) . 'images/' . $prod['image'] ?>"
                                             class="img-fluid" alt="Free html5 bootstrap 4 template">
                                    </a>
                                    <div class="desc">
                                        <h2><a href="#"><?= $prod['title'] ?></a></h2>
                                        <span class="price"><?= $prod['price'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php

                        }

                    }
                    ?>

                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block-27">
                            <ul>
                                <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>Trusted Partners</h2>
            </div>
        </div>
        <div class="row">
            <div class="col partner-col text-center">
                <img src="<?= \yii\helpers\Url::to(['/']) ?>images/brand-1.jpg" class="img-fluid"
                     alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="<?= \yii\helpers\Url::to(['/']) ?>images/brand-2.jpg" class="img-fluid"
                     alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="<?= \yii\helpers\Url::to(['/']) ?>images/brand-3.jpg" class="img-fluid"
                     alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="<?= \yii\helpers\Url::to(['/']) ?>images/brand-4.jpg" class="img-fluid"
                     alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="<?= \yii\helpers\Url::to(['/']) ?>images/brand-5.jpg" class="img-fluid"
                     alt="Free html4 bootstrap 4 template">
            </div>
        </div>
    </div>
</div>