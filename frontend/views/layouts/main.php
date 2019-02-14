<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
    <script>
        window.HOME_URL = "<?= Yii::getAlias('@web') ?>"
    </script>

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<main id="page">
    <header>
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-md-9">
                            <div id="colorlib-logo"><a href="/">Footwear</a></div>
                        </div>
                        <div class="col-sm-5 col-md-3">
                            <form action="<?= \yii\helpers\Url::to(['/search'])?>" method="get" class="search-wrap">
                                <div class="form-group">
                                    <input type="search" name="search" class="form-control search" placeholder="Search product">
                                    <button class="btn btn-primary submit-search text-center" type="submit"><i
                                                class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-left menu-1">


                            <ul>
                                <li class="active"><a href="<?= \yii\helpers\Url::to(['/']) . 'site/' ?>">Home</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/']) . 'site/about' ?>">About</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/']) . 'site/contact' ?>">Contact</a></li>
                                <?php
                                if (Yii::$app->user->isGuest) {
                                    ?>
                                    <li><a href="<?= \yii\helpers\Url::to(['/']) . 'site/signup' ?>">Signup</a></li>
                                    <li><a href="<?= \yii\helpers\Url::to(['/']) . 'site/login' ?>">Login</a></li>
                                    <?php
                                } else {
                                    ?>
                                    <li>
                                        <form id="nav-form" action="<?= \yii\helpers\Url::to(['/']) . 'site/logout' ?>" method="post">
                                            <input type="hidden" name="_csrf-frontend" value="wqOKrocOxVjlwA10wE3aL9happ62mB-JkYcttODH4s6o17ze3TugNJ2zNReJD69GqmvH8t_hU8ajsRzcmoKOoQ==">
                                            <button id="nav-button" class="btn btn-link logout" name="submit" type="submit"><a>Logout
                                                    (<?= Yii::$app->user->identity->username ?>)</a>
                                            </button>


                                        </form>
                                    </li>
                                    <li class="cart"><a href="<?= \yii\helpers\Url::to(['/']) . 'site/cart' ?>"><i class="icon-shopping-cart"></i> Cart [0]</a></li>
                                    <?php
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sale">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2 text-center">
                            <div class="row">
                                <div class="owl-carousel2">
                                    <div class="item">
                                        <div class="col">
                                            <h3  style="color: white"><?= \frontend\widgets\info\InfoWidget::widget(['action' => 'headline_one']); ?></a></h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col">
                                            <h3  style="color: white"><?= \frontend\widgets\info\InfoWidget::widget(['action' => 'headline_two']); ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div id="main_content">
    <?= $content ?>
    </div>
    <footer id="colorlib-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col footer-col colorlib-widget">
                    <h4>About Footwear</h4>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                        unorthographic life</p>
                    <p>
                    <ul class="colorlib-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                    </p>
                </div>
                <div class="col footer-col colorlib-widget">
                    <h4>Customer Care</h4>
                    <p>
                    <ul class="colorlib-footer-links">
                        <li><a href="<?= \yii\helpers\Url::to(['/']) . 'site/contact' ?>">Contact</a></li>
                        <li><a href="#">Returns/Exchange</a></li>
                        <li><a href="#">Gift Voucher</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Special</a></li>
                        <li><a href="#">Customer Services</a></li>
                        <li><a href="#">Site maps</a></li>
                    </ul>
                    </p>
                </div>
                <div class="col footer-col colorlib-widget">
                    <h4>Information</h4>
                    <p>
                    <ul class="colorlib-footer-links">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Order Tracking</a></li>
                    </ul>
                    </p>
                </div>

                <div class="col footer-col">
                    <h4>News</h4>
                    <ul class="colorlib-footer-links">
                        <li><a href="<?= \yii\helpers\Url::to(['/']) . 'blog/blog'?>">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Exhibitions</a></li>
                    </ul>
                </div>

                <div class="col footer-col">
                    <h4>Contact Information</h4>
                    <ul class="colorlib-footer-links">
                        <li><?= \frontend\widgets\info\InfoWidget::widget(['action' => 'address']); ?></li>
                        <li><a href="tel://1234567920"><?= \frontend\widgets\info\InfoWidget::widget(['action' => 'phone']); ?></a></li>
                        <li style="text-transform: lowercase"><a href="mailto:info@yoursite.com"><?= \frontend\widgets\info\InfoWidget::widget(['action' => 'email']); ?></a></li>
                        <li><a href="#">yoursite.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p><span>Copyright &copy;2019 All rights reserved <i class="icon-heart" aria-hidden="true"></i></span></p>
                </div>
            </div>
        </div>
    </footer>
</main>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
</div>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
