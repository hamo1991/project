<?php
namespace backend\widgets\email;

use Yii;
use backend\models\Email;

class EmailWidget extends \yii\bootstrap\Widget {

    public function run() {
        $messages = Email::find()->count();
        return $messages;
    }

}