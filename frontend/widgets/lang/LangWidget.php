<?php
namespace frontend\widgets\lang;
use common\models\Lang;

class LangWidget extends \yii\bootstrap\Widget
{

    public function run() {

        $langs = Lang::find()->all();

        return $this->render('lang/view', [
            'langs' => $langs


        ]);
    }
}