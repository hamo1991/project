<?php

namespace backend\controllers;

use Yii;
use common\models\Pictures;
use common\models\Products;
use common\models\search\PicturesSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;

/**
 * PicturesController implements the CRUD actions for Pictures model.
 */
class PicturesController extends Controller {
    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Pictures models.
     * @return mixed
     */
    public function actionIndex() {


        $searchModel = new PicturesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pictures model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Pictures model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $upload = new Pictures();

        $products = Products::find()->asArray()->all();
        $products = ArrayHelper::map($products, 'id', 'title');
        if ($upload->load(Yii::$app->request->post())) {
            $upload->image = UploadedFile::getInstances($upload, 'image');
            if ($upload->image && $upload->validate()) {
                $filePath = Yii::getAlias('@frontend') . '/web/images/uploads/products/';

                foreach ($upload->image as $image) {
                    $model = new Pictures();
                    $model->product_id = $upload->product_id;
                    $model->image = Yii::$app->security->generateRandomString() . '.' . $image->extension;
                    if ($model->save(false)) {
                        $image->saveAs($filePath . $model->image);
                    }
                }
                return $this->redirect(['index']);
            }
        }
        return $this->render('create', [
            'upload' => $upload,
            'products' => $products
        ]);


    }

    /**
     * Updates an existing Pictures model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionUpdate($id) {

        $products = Products::find()->asArray()->all();
        $products = ArrayHelper::map($products, 'id', 'title');

        $upload = $this->findModel($id);

        $old_image = $upload->image;

        if ($upload->load(Yii::$app->request->post())) {
            $upload->image = UploadedFile::getInstances($upload, 'image');
            $imgPath = Yii::getAlias('@frontend') . '/web/images/uploads/products/';
            if (!empty($upload->image)) {
                foreach ($upload->image as $image) {
                    $upload->image = Yii::$app->security->generateRandomString() . '.' . $image->extension;
                }
                if ($upload->save(false)) {
                    if ($old_image == '') {
                        $image->saveAs($imgPath . $old_image);
                    } elseif (file_exists($imgPath . $old_image)) {
                        unlink($imgPath . $old_image);
                        $image->saveAs($imgPath . $upload->image);
                    }

                }

            } else {
                $upload->image = $old_image;
                $upload->save(['image']);
            }

            return $this->redirect(['/pictures']);
        }
        return $this->render('update', [
            'upload' => $upload,
            'products' => $products

        ]);

    }

    /**
     * Deletes an existing Pictures model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {

        $upload = $this->findModel($id);
        $image = $upload->image;
        $imgPath = Yii::getAlias('@frontend') . '/web/images/uploads/products/';
        $file = $imgPath . $image;
        if ($image == '') {
            $this->findModel($id)->delete();
        } elseif (file_exists($file)) {
            unlink($file);
            $this->findModel($id)->delete();
        }


        return $this->redirect(['/pictures']);
    }

    /**
     * Finds the Pictures model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Pictures the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Pictures::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
