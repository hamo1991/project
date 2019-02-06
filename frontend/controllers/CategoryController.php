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
use yii\data\Pagination;
use yii\data\ActiveDataProvider;

class CategoryController extends Controller {

    public function actionIndex($slug) {



        $category = Categories::findOne(['slug' => $slug]);

        if(!empty($category)){
            $id = $category->id;

            $categories = Categories::find()->asArray()->all();
            $brands = Brands::find()->asArray()->all();
            $category = Categories::find()->with(['products','brands'])
                ->where(['id' => $id])->asArray()->one();

//            $brands = Brands::find()->with(['products'])->asArray()->one();


            return $this->render('index',[
                'categories' => $categories,
                'category' => $category,
                'brands' => $brands,

            ]);
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}