<?php
if (!empty($category)) {

    $this->title = $category['title'] . " Collection";
    ?>
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col">

                    <p class="bread"><span><?= $category['title'] ?> Collection</span></p>


                </div>
            </div>

        </div>
    </div>
    <div class="breadcrumbs-two">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs-img"
                         style="background-image: url(<?= \yii\helpers\Url::to(['/']) . 'images/uploads/categories/' . $category['info_image'] ?>);">
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
            <div class="col-lg-3 col-xl-3">
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
                    <div class="col-sm-12">
                        <div class="side border mb-1">
                            <h3>Colors</h3>
                            <ul>

                                <?php
                                if (!empty($colors)) {
                                    foreach ($colors as $col) {
                                        ?>

<!--                                        --><?php //if ($brandName == strtolower($col['title'])) {
//                                            $name = 'category';
//                                        } else {
//                                            $name = '';
//                                        }
//                                        ?>

                                        <li id="<?= $name ?>">
                                            <a href="<?= \yii\helpers\Url::to(['/category/' . $category['slug'] . '/' . $brand['slug'] . '/' . $col['slug']]) ?>"><?= $col['title'] ?></a>
                                        </li>
                                        <?php
                                    }
                                }

                                ?>

<!--                                <li><a href="#">Black</a></li>-->
<!--                                <li><a href="#">White</a></li>-->
<!--                                <li><a href="#">Blue</a></li>-->
<!--                                <li><a href="#">Red</a></li>-->
<!--                                <li><a href="#">Green</a></li>-->
<!--                                <li><a href="#">Grey</a></li>-->
<!--                                <li><a href="#">Orange</a></li>-->
<!--                                <li><a href="#">Cream</a></li>-->
<!--                                <li><a href="#">Brown</a></li>-->
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
                                    <a href="<?= \yii\helpers\Url::to(['products/product/' . $prod['slug']]) ?>"
                                       class="prod-img">
                                        <?php if ($prod['is_new']) : ?>
                                            <img class="new-sale"
                                                 src="<?= \yii\helpers\Url::to(['/']) . 'images/new.png' ?>" alt="new">
                                        <?php endif ?>
                                        <?php if ($prod['is_sale']) : ?>
                                            <img class="new-sale"
                                                 src="<?= \yii\helpers\Url::to(['/']) . 'images/sale.png' ?>"
                                                 alt="sale">
                                        <?php endif ?>
                                        <img src="<?= \yii\helpers\Url::to(['/']) . 'images/uploads/products/' . $prod['image'] ?>"
                                             class="img-fluid" alt="Free html5 bootstrap 4 template">
                                    </a>
                                    <div class="desc">
                                        <h2>
                                            <a href="<?= \yii\helpers\Url::to(['products/product', 'slug' => $prod['slug']]) ?>"><?= $prod['title'] ?></a>
                                        </h2>
                                        <?php
                                        if ($prod['sale_price']) {
                                            ?>
                                            <span class="price"><del><?= $prod['price'] ?></del></span>
                                            <span class="price"><?= $prod['sale_price'] ?></span>
                                            <?php
                                        } else {
                                            ?>
                                            <span class="price"><?= $prod['price'] ?></span>
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
