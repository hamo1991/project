<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides ">
            <?php
            if (!empty($slider)) {
                foreach ($slider as $slide) {
                    ?>
                    <li style="background-image: url(<?= \yii\helpers\Url::to(['/']) . 'images/uploads/slider/' . $slide['image'] ?>);">
                        <div class="overlay"></div>
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">
                                            <h1 class="head-1"><?= $slide['title'] ?></h1>
                                            <h2 class="head-3"><?= $slide['description'] ?></h2>
                                            <p style="color: white" class="category font-weight-bold"><?= $slide['content'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <?php
                }
            }
            ?>

        </ul>
    </div>
</aside>
<div class="colorlib-intro" id="intro">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="intro"><?= \frontend\widgets\info\InfoWidget::widget(['action' => 'about']); ?></h2>
            </div>
        </div>
    </div>
</div>
<div id="border" class="colorlib-product container">
    <div class="container-fluid">
        <div class="row">
            <?php
            if (!empty($categories)) {
                foreach ($categories as $cat) {
                    ?>
                    <div class="col-sm-6 text-center" id="kids">
                        <div class="featured">
                            <a href="<?= \yii\helpers\Url::to(['/']) . 'category/' . $cat['slug'] ?>"
                               class="featured-img"
                               style="  background-image: url(<?= \yii\helpers\Url::to(['/']) . 'images/uploads/categories/' . $cat['image'] ?>);"></a>
                            <div class="desc">
                                <h2>
                                    <a href="<?= \yii\helpers\Url::to(['/']) . 'category/' . $cat['slug'] ?>"><?= $cat['title'] ?>
                                        Collection</a></h2>
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
<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>Best Sellers</h2>
            </div>
        </div>
        <div class="row row-pb-md">
            <?php
            if (!empty($hitProducts)) {
                foreach ($hitProducts as $hit) {
                    ?>

                    <div class="col-lg-3 mb-4 text-center">

                        <div class="product-entry border">

                            <a href="<?= \yii\helpers\Url::to(['products/product/' . $hit['slug']]) ?>"
                               class="prod-img">
                                <?php if ($hit['is_new']) : ?>
                                    <img class="new-sale" src="<?= \yii\helpers\Url::to(['/']) . 'images/new.png' ?>"
                                         alt="new">
                                <?php endif ?>
                                <?php if ($hit['is_sale']) : ?>
                                    <img class="new-sale" src="<?= \yii\helpers\Url::to(['/']) . 'images/sale.png' ?>"
                                         alt="sale">
                                <?php endif ?>
                                <img src="<?= \yii\helpers\Url::to(['/']) . 'images/uploads/products/' . $hit['image'] ?>"
                                     class="img-fluid" alt="Product images">
                            </a>
                            <div class="desc">
                                <h2>
                                    <a href="<?= \yii\helpers\Url::to(['products/product', 'slug' => $hit['slug']]) ?>"><?= $hit['title'] ?></a>
                                </h2>
                                <?php
                                if ($hit['sale_price']) {
                                    ?>
                                    <span class="price"><del><?= $hit['price'] ?></del></span>
                                    <span class="price"><?= $hit['sale_price'] ?></span>
                                    <?php
                                } else {
                                    ?>
                                    <span class="price"><?= $hit['price'] ?></span>
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
                <p><a href="<?= \yii\helpers\Url::to(['/']) ?>products/" class="btn btn-primary btn-lg">All Products</a>
                </p>
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

</div>