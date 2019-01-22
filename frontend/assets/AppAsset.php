<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'css/animate.css',
        'css/icomoon.css',
        'css/ionicons.min.css',
        'css/bootstrap.min.css',
        'css/magnific-popup.css',
        'css/flexslider.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/bootstrap-datepicker.css',
        'fonts/flaticon/font/flaticon.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery-3.2.1.min.js',
        'js/jquery-migrate-3.0.1.min.js',
        'js/aos.js',
        'js/jquery.min.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/jquery.countTo.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.waypoints.min.js',
        'js/jquery.flexslider-min.js',
        'js/owl.carousel.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/magnific-popup-options.js',
        'js/bootstrap-datepicker.js',
        'js/jquery.stellar.min.js',
        'js/main.js',
        'js/jquery.animateNumber.min.js',
        'js/respond.min.js',
//        'js/google_map.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
