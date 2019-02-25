<?php


namespace backend\widgets\email;

use backend\models\Email;

class EmailWidget extends  \yii\bootstrap\Widget
{

    public $count;

    public function run()
    {

        if($this->count == 'count'){
            $count = Email::find()->all();
            return count($count);
        }

        $messages = Email::find()->orderBy(['date' => SORT_DESC])->asArray()->all();
        return $this->render('messages',[
            'messages' => $messages,
        ]);

    }
}