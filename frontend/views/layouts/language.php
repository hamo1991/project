<?php

use yii\bootstrap\html;

if (Yii::$app->language == 'en') {
    echo Html::a('Pereyti na russki',array_merge(Yii::$app->request->get(),[Yii::$app->controller->route,'language' => 'ru']));
}