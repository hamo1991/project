<?php

namespace frontend\models;

use Yii;
use backend\models\Email;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends \yii\db\ActiveRecord {
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email) {

        $model = new Email();
        $model->content = $this->body;
        $model->email = $this->email;
        $model->save(false);


        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom(['hambardzum1991@mail.ru' => $this->email])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }
}
