<?php


namespace frontend\controllers;


use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Categories;
use common\models\Products;
use common\models\Cart;
use yii\db\Query;
use common\models\Brands;

class CategoryController extends Controller {

    public function actionIndex($id) {

        $id = Yii::$app->request->get('id');
        $products = Products::find()->where(['cat_id' => $id])->asArray()->all();
        $categories = Categories::find()->asArray()->all();
        $brands = Brands::find()->asArray()->all();
        return $this->render('index',[
            'id' => $id,
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands
        ]);
    }
}