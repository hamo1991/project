<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property int $id
 * @property string $type
 * @property string $content
 */
class Info extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'content'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'type' => Yii::t('app', 'Type'),
            'content' => Yii::t('app', 'Content'),
        ];
    }
}
