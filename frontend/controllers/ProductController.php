<?php


namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\Categories;
use common\models\Products;
use common\models\Cart;
use yii\db\Query;
use common\models\Brands;


class ProductController extends Controller {

    public function actionIndex($slug = '') {

        $product = Products::findOne(['slug' => $slug]);

        return $this->render('index', [
            'product' => $product
        ]);
    }
}