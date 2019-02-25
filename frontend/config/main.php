<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'blog' => [
            'class' => 'frontend\modules\blog\Module',
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
            'class' => 'frontend\components\LangRequest'
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'CbRF' => [
            'class' => 'microinginer\CbRFRates\CBRF',
            'defaultCurrency' => "USD"
        ],
        'language'=>'en-EN',
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/translations',
                    'sourceLanguage' => 'en',
                    'fileMap' => [
//                        'main' => 'app.php',
                    ],
                ],
            ],
        ],

        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],


        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class'=>'frontend\components\LangUrlManager',
            'rules' => [


//                '/' => 'site/index',
//                '<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',
                'search' => 'products/search',
                'products/product/<slug>' => 'products/product',
                'category/<slug>' => 'category/index',
                'category/<slug>/<name:\w+>' => 'category/index',
                'blog' => 'blog/blog/index',
                'article/<slug>' => 'blog/blog/article',
                'products/index' => 'products/',
                'products/<slug>' => 'products/',




            ],
        ],

    ],
    'params' => $params,
];
