<?php

namespace  common\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "categories".
 *
 * @property string $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $info_image
 * @property string $slug
 *
 * @property Brands[] $brands
 * @property Products[] $products
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }


    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title',
                'slugAttribute' => 'slug',
                'ensureUnique' => true
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'slug'], 'required'],
            [['description'], 'string'],
            [['title', 'image','info_image'], 'string', 'max' => 255],
            [['slug'], 'string', 'max' => 150],
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
            'image' => 'Image',
            'slug' => 'Slug',
            'info_image' => 'Info Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['cat_id' => 'id']);
    }
}
