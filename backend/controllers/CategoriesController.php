<?php

namespace backend\controllers;

use Yii;
use common\models\Categories;
use common\models\search\CategoriesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CategoriesController implements the CRUD actions for Categories model.
 */
class CategoriesController extends Controller {
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
     * Lists all Categories models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new CategoriesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Categories model.
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
     * Creates a new Categories model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Categories();
        $imgPath = Yii::getAlias('@frontend') . '/web/images/uploads/categories/';
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $imgFileOne = UploadedFile::getInstance($model, "image");
            $imgFileTwo = UploadedFile::getInstance($model, "info_image");

            if (!empty($imgFileOne)) {

                $imgName = Yii::$app->security->generateRandomString() . '.' . $imgFileOne->extension;
                $model->image = $imgName;
                $path = $imgPath . $imgName;
                if ($imgFileOne->saveAs($path)) {
                    $model->save(['image']);
                }

            }

            if (!empty($imgFileTwo)) {

                $imgName = Yii::$app->security->generateRandomString() . '.' . $imgFileTwo->extension;
                $model->info_image = $imgName;
                $path = $imgPath . $imgName;
                if ($imgFileTwo->saveAs($path)) {
                    $model->save(['info_image']);
                }

            }

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Categories model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {

        $model = $this->findModel($id);

        $oldImageOne = $model->image;
        $oldImageTwo = $model->info_image;

        $imgPath = Yii::getAlias('@frontend') . '/web/images/uploads/categories/';

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $imgFileOne = UploadedFile::getInstance($model, "image");
            $imgFileTwo = UploadedFile::getInstance($model, "info_image");

            if (!empty($imgFileOne)) {

                $imgName = Yii::$app->security->generateRandomString() . '.' . $imgFileOne->extension;
                $model->image = $imgName;
                $path = $imgPath . $imgName;
                if ($imgFileOne->saveAs($path)) {
                    if ($oldImageOne == '') {
                        $model->save(['image']);
                    } elseif (file_exists($imgPath . $oldImageOne)) {
                        unlink($imgPath . $oldImageOne);
                        $model->save(['image']);

                    }
                }

            } else {
                $model->image = $oldImageOne;
                $model->save(['image']);
            }

            if (!empty($imgFileTwo)) {

                $imgName = Yii::$app->security->generateRandomString() . '.' . $imgFileTwo->extension;
                $model->info_image = $imgName;
                $path = $imgPath . $imgName;
                if ($imgFileTwo->saveAs($path)) {
                    if ($oldImageTwo == '') {
                        $model->save(['info_image']);
                    } elseif (file_exists($imgPath . $oldImageTwo)) {
                        unlink($imgPath . $oldImageTwo);
                        $model->save(['info_image']);

                    }
                }

            } else {
                $model->info_image = $oldImageTwo;
                $model->save(['info_image']);
            }


            return $this->redirect(['/categories']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);

    }

    /**
     * Deletes an existing Categories model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {

        $model = $this->findModel($id);
        $imgPath = Yii::getAlias('@frontend') . '/web/images/uploads/categories/';

        $imageOne = $model->image;
        $imageTwo = $model->info_image;
        $fileOne = $imgPath . $imageOne;
        $fileTwo = $imgPath . $imageTwo;

        if ($imageOne == '' || $imageTwo == '') {
            $this->findModel($id)->delete();
        }elseif (file_exists($fileOne) && file_exists($fileTwo)) {
            unlink($fileOne);
            unlink($fileTwo);
            $this->findModel($id)->delete();
        }



        return $this->redirect(['/categories']);
    }

    /**
     * Finds the Categories model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Categories the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Categories::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
