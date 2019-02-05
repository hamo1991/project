<?php

$this->title = 'All Products';
?>
<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>All Products</h2>
            </div>
        </div>

        <div class="row row-pb-md">

            <?php
            if (!empty($products)) {
                foreach ($products as $product) {
                    ?>

                    <div class="col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="<?= \yii\helpers\Url::to(['product/' . $product['slug']]) ?>" class="prod-img">
                                <?php if ($product['is_new']) : ?>
                                    <img class="new-sale" src="<?= \yii\helpers\Url::to(['/']) . 'images/new.png' ?>"
                                         alt="new">
                                <?php endif ?>
                                <?php if ($product['is_sale']) : ?>
                                    <img class="new-sale" src="<?= \yii\helpers\Url::to(['/']) . 'images/sale.png' ?>"
                                         alt="sale">
                                <?php endif ?>
                                <?= \yii\helpers\Html::img("@web/images/uploads/products/{$product['image']}", ['alt' => "picture", 'class' => 'img-fluid']) ?>
                            </a>
                            <div class="desc">
                                <h2>
                                    <a href="<?= \yii\helpers\Url::to(['product/', 'slug' => $product['slug']]) ?>"><?= $product['title'] ?></a>
                                </h2>
                                <?php
                                if ($product['sale_price']) {
                                    ?>
                                    <p><span class="price"><del><?= $product['price'] ?></del></span>
                                        <span class="price"><?= $product['sale_price'] ?></span></p>

                                    <?php
                                } else {
                                    ?>
                                    <span class="price"><?= $product['price'] ?></span>
                                    <?php
                                }
                                ?>
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
                    <?php
                    echo \yii\widgets\LinkPager::widget(

                        [
                            'pagination' => $pagination,



                        ]); ?>
                </div>
            </div>
        </div>


    </div>


    <div class="colorlib-partner" id="partner">
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
</div>/