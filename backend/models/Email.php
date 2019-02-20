<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mail".
 *
 * @property string $id
 * @property string $email
 * @property string $content
 * @property string $date
 */
class Email extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'email';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'content'], 'required'],
            [['date'], 'safe'],
            [['email'], 'string', 'max' => 150],
            [['content'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'content' => 'Content',
            'date' => 'Date',
        ];
    }
}
