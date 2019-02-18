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
use common\models\Colors;
use common\models\Cart;
use yii\db\Query;
use common\models\Brands;
use yii\web\NotFoundHttpException;
use yii\data\Pagination;
use yii\data\ActiveDataProvider;

class CategoryController extends Controller {

    public function actionIndex($slug = '', $name = '') {

        $category = Categories::findOne(['slug' => $slug]);
        $brands = Brands::findOne(['slug' => $name]);


        if (!empty($category)) {
            $id_cat = $category->id;


            $categories = Categories::find()->asArray()->all();
            $category = Categories::find()
                ->where(['id' => $id_cat])->asArray()->one();

            $query = Products::find()->where(['cat_id' => $id_cat]);
            if (!empty($brands)) {
                $query->andWhere(['brand_id' => $brands->id]);
            }
            $products = $query->asArray()->all();

            $brands = Brands::find()->alias('b')
                ->innerJoin('rules as ru', 'ru.brand_id = b.id')
                ->where(['ru.cat_id' => $id_cat])->asArray()->all();


            return $this->render('index', [
                'categories' => $categories,
                'category' => $category,
                'products' => $products,
                'brands' => $brands,
                'brandName' => $name
            ]);
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}