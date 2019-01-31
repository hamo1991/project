<?php

namespace  common\models;

use Yii;

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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'image', 'info_image', 'slug'], 'required'],
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
    public function getBrands()
    {
        return $this->hasMany(Brands::className(), ['cat_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['cat_id' => 'id']);
    }
}
