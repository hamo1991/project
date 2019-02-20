<?php

namespace backend\widgets\users;

use common\models\User;

class UsersWidget extends \yii\bootstrap\Widget {

    public function run() {
        $users = User::find()->count();
        return $users;

    }

}