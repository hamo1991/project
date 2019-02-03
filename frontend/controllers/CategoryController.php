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
use yii\web\NotFoundHttpException;

class CategoryController extends Controller {

    public function actionIndex($slug) {

        $category = Categories::findOne(['slug' => $slug]);
        if(!empty($category)){
            $id = $category->id;
            $categories = Categories::find()->asArray()->all();
            $category = Categories::find()->with(['products','brands'])
                ->where(['id' => $id])->asArray()->one();
            return $this->render('index',[
                'categories' => $categories,
                'category' => $category
            ]);
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}