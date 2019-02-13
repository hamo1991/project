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
use yii\data\Pagination;
use yii\data\ActiveDataProvider;


class ProductsController extends Controller{


    public function actionIndex($slug = '') {
        $brands = Brands::find()->asArray()->all();
        if ($slug) {

            $brand = Brands::findOne(['slug' => $slug]);
            if(!empty($brand)) {
                $id = $brand->id;

                $productBrands = Products::find()->where(['brand_id' => $id])->orderBy(['title' => 4]);
                $pagination = new Pagination(['totalCount' => $productBrands->count(), 'pageSize' => 2]);
                $productBrands = $productBrands->offset($pagination->offset)->limit($pagination->limit)->asArray()->all();

                $dataProvider = new ActiveDataProvider([
                    'query' => $productBrands,
                ]);
                return $this->render('index', [
                    'productBrands' => $productBrands,
                    'dataProvider' => $dataProvider,
                    'pagination' => $pagination,
                    'brands' => $brands
                ]);
            }
        }

        $products = Products::find()->orderBy(['title'=>4]);
        $pagination = new Pagination(['totalCount' => $products->count(),'pageSize' =>8]);
        $dataProvider = new ActiveDataProvider([
            'query' => $products,
        ]);
        $products = $products->offset($pagination->offset)->limit($pagination->limit)->asArray()->all();

        return $this->render('index', [
            'products' => $products,
            'dataProvider' => $dataProvider,
            'pagination' => $pagination,
            'brands' => $brands,

        ]);


    }

    public function actionSearch(){
        $search =  trim(htmlspecialchars(Yii::$app->request->get('search')));
        $brands = Brands::find()->asArray()->all();
        if (!$search) {
            return $this->render('search',[
                'brands' => $brands
            ]);
        }
        $query = Products::find()
            ->where(['like', 'title', $search]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize'=> 8]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search',[
            'products' => $products,
            'pagination' => $pages,
            'search' => $search,
            'brands' => $brands
        ]);
    }


}