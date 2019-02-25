<?php
if (!empty($category)) {

    $this->title = $category['title'] . " Collection";
    ?>
    <?php \yii\widgets\Pjax::begin(['enablePushState' => true]); ?>
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="bread"><span><?= $category['title'] ?> Collection</span></p>

                </div>
            </div>

        </div>
    </div>
    <div class="breadcrumbs-two animated bounceInRight">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs-img"
                         style="background-image: url(<?='/images/uploads/categories/' . $category['info_image'] ?>);">
                        <h2><?= $category['title'] ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php

}

?>


<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-xl-3 animated bounceInLeft">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="side border mb-1">
                            <h3>Categories</h3>
                            <ul>
                                <?php
                                if (!empty($categories)) {
                                    foreach ($categories as $cat) {
                                        ?>
                                        <?php if ($category['id'] == $cat['id']) {
                                            $name = 'category';
                                        } else {
                                            $name = '';
                                        }
                                        ?>
                                        <li id="<?= $name ?>">
                                            <a href="<?= \yii\helpers\Url::to(['/category/' . $cat['slug']]) ?>"><?= $cat['title'] ?></a>
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
                            <h3>Brands</h3>
                            <ul>
                            <?php
                                if (!empty($brands)) {
                                    foreach ($brands as $brand) {
                                        ?>

                                        <?php if ($brandName == strtolower($brand['title'])) {
                                            $name = 'category';
                                        } else {
                                            $name = '';
                                        }
                                        ?>
                                        <li id="<?= $name ?>">
                                            <a href="<?= \yii\helpers\Url::to(['/category/' . $category['slug'] . '/' . $brand['slug']]) ?>"><?= $brand['title'] ?></a>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-xl-9 animated bounceInUp">
                <div class="row row-pb-md">

                    <?php
                    if (!empty($products)) {
                        foreach ($products as $prod) {
                            ?>

                            <div class="col-lg-4 mb-4 text-center">
                                <div class="product-entry border">
                                    <a href="<?= \yii\helpers\Url::to(['products/product/' . $prod['slug']]) ?>"
                                       class="prod-img">
                                        <?php if ($prod['is_new']) : ?>
                                            <?= \yii\helpers\Html::img("@web/images/new.png", ['alt' => "new", 'class' => 'new-sale']) ?>
                                        <?php endif ?>
                                        <?php if ($prod['is_sale']) : ?>
                                            <?= \yii\helpers\Html::img("@web/images/sale.png", ['alt' => "sale", 'class' => 'new-sale']) ?>
                                        <?php endif ?>
                                        <?= \yii\helpers\Html::img("@web/images/uploads/products/{$prod['image']}", ['alt' => "picture-products", 'class' => 'img-fluid','id' => 'radius']) ?>
                                    </a>
                                    <div class="desc">
                                        <h2>
                                            <a href="<?= \yii\helpers\Url::to(['products/product', 'slug' => $prod['slug']]) ?>"><?= $prod['title'] ?></a>
                                        </h2>
                                        <?php
                                        if ($prod['sale_price']) {
                                            ?>
                                            <span class="price"><del><?= $prod['price'] ?>֏</del></span>
                                            <span class="price"><?= $prod['sale_price'] ?>֏</span>
                                            <?php
                                        } else {
                                            ?>
                                            <span class="price"><?= $prod['price'] ?>֏</span>
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
            </div>
        </div>
    </div>
</div>
<?php \yii\widgets\Pjax::end(); ?>