<?php

namespace frontend\widgets\info;

use common\models\Info;

class InfoWidget extends \yii\bootstrap\Widget {
    public $action;

    public function run() {

        if (!empty($this->action)) {
            if ($this->action == 'email') {
                $info = Info::find()->where(['type' => 'email'])->asArray()->one();
            } elseif ($this->action == 'info') {
                $info = Info::find()->where(['type' => 'info'])->asArray()->one();
            } elseif ($this->action == 'address') {
                $info = Info::find()->where(['type' => 'address'])->asArray()->one();
            } elseif ($this->action == 'phone') {
                $info = Info::find()->where(['type' => 'phone'])->asArray()->one();
            } elseif ($this->action == 'headline_one') {
                $info = Info::find()->where(['type' => 'headline_one'])->asArray()->one();
            }elseif ($this->action == 'headline_two') {
                $info = Info::find()->where(['type' => 'headline_two'])->asArray()->one();
            }elseif ($this->action == 'about') {
                $info = Info::find()->where(['type' => 'about'])->asArray()->one();
            }

        }

        return $info['content'];
    }

}