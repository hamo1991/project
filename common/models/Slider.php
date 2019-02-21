<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property string $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $slug
 * @property string $image
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'content','slug'], 'string', 'max' => 100],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'content' => 'Content',
            'slug' => 'Slug',
            'image' => 'Image',
        ];
    }
}
