<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',

    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

//    public function init()
//    {
//        if (\Yii::$app->controller->action->id === 'index') {
////            $this->css[] = 'css/style.css';
//
////            $this->js[] = 'js/quantity.js';
//        }
//
//    }
}
