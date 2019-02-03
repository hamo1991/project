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
                            <form action="#" class="search-wrap">
                                <div class="form-group">
                                    <input type="search" class="form-control search" placeholder="Search">
                                    <button class="btn btn-primary submit-search text-center" type="submit"><i
                                                class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-left menu-1">
                            <?php
                            $menuItems = [
                                ['label' => 'Home', 'url' => ['site/']],
                                ['label' => 'About', 'url' => ['site/about']],
                                ['label' => 'Contact', 'url' => ['site/contact']],
                            ];

                            if (Yii::$app->user->isGuest) {
                                $menuItems[] = ['label' => 'Signup', 'url' => ['site/signup']];
                                $menuItems[] = ['label' => 'Login', 'url' => ['site/login']];
                            } else {
                                $menuItems[] = "<li class='logout-btn'>"
                                    . Html::beginForm(['/site/logout'], 'post')
                                    . Html::submitButton(
                                        'Logout (' . Yii::$app->user->identity->username . ')',
                                        ['class' => 'btn btn-link logout']
                                    )
                                    . Html::endForm()
                                    . "</li>";
                            }
                            $menuItems[] = ['label' => ' Cart [0]', 'options' => ['id' => 'cart'], 'url' => ['site/cart',]];
                            echo Nav::widget([
                                'options' => ['class' => 'active'],
                                'items' => $menuItems,
                            ]);
                            ?>
                            <!--                            <li class="cart"><a href="../site/cart.php"><i class="icon-shopping-cart"></i> Cart [0]</a></li>-->

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
                                            <h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col">
                                            <h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
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

      <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
      ]) ?>
   <?= Alert::widget() ?>
    <?= $content ?>


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
                        <li><a href="#">Contact</a></li>
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
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Exhibitions</a></li>
                    </ul>
                </div>

                <div class="col footer-col">
                    <h4>Contact Information</h4>
                    <ul class="colorlib-footer-links">
                        <li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
                        <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                        <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                        <li><a href="#">yoursite.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>
							<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;2019 All rights reserved <i class="icon-heart" aria-hidden="true"></i>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</main>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
</div>

<?php $this->endBody() ?>
<!--<script>-->
<!--    function myMap() {-->
<!--        let mapOptions = {-->
<!--            center: new google.maps.LatLng(40.79229336, 43.84778612),-->
<!--            zoom: 16,-->
<!--            mapTypeId: google.maps.MapTypeId.HYBRID,-->
<!--        };-->
<!--        let map = new google.maps.Map(document.getElementById("map"), mapOptions);-->
<!--    }-->
<!--</script>-->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwtvaOIGoZZezU3Sm-KDZAtnGxtY5VOUI&callback=myMap"></script>-->
</body>
</html>
<?php $this->endPage() ?>
