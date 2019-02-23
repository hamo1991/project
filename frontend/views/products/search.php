<?php

$this->title = 'Search Products';
?>
<div class="colorlib-product">

    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>Search result</h2>
            </div>
        </div>
        <?php \yii\widgets\Pjax::begin(['enablePushState' => true]); ?>
        <div id="products-search" class="row row-pb-md">

            <?php

            if (!empty($products)) {
                foreach ($products as $product) {
                    ?>

                    <div class="col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="<?= \yii\helpers\Url::to(['products/product/' . $product['slug']]) ?>" class="prod-img">
                                <?php if ($product['is_new']) : ?>
                                    <?= \yii\helpers\Html::img("@web/images/new.png", ['alt' => "new", 'class' => 'new-sale']) ?>
                                <?php endif ?>
                                <?php if ($product['is_sale']) : ?>
                                    <?= \yii\helpers\Html::img("@web/images/sale.png", ['alt' => "sale", 'class' => 'new-sale']) ?>
                                <?php endif ?>
                                <?= \yii\helpers\Html::img("@web/images/uploads/products/{$product['image']}", ['alt' => "product picture", 'class' => 'img-fluid','id' => 'radius']) ?>
                            </a>
                            <div class="desc">
                                <h2>
                                    <a href="<?= \yii\helpers\Url::to(['/products/product/', 'slug' => $product['slug']]) ?>"><?= $product['title'] ?></a>
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

            } else {
                echo "<h2 style='margin: 0 auto'>NO SUCH PRODUCT</h2>";

            }
            ?>

        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="block-27">
                    <?php
                    if (!empty($search)) {

                        echo \yii\widgets\LinkPager::widget(
                            [
                                'pagination' => $pagination,

                            ]);

                    }
                    ?>
                </div>
            </div>
        </div>
        <?php \yii\widgets\Pjax::end(); ?>
    </div>


    <div class="colorlib-partner" id="partner">
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
                        <div class="col partner-col text-center">
                            <a href="<?= \yii\helpers\Url::to(['/']) . 'products/' . $brand['slug'] ?>">
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
</div>