<?php

namespace  common\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property string $id
 * @property string $title
 * @property string $description
 * @property double $price
 * @property double $sale_prise
 * @property string $sku
 * @property int $quantity
 * @property int $available_stock
 * @property string $is_new
 * @property string $is_sale
 * @property string $image
 * @property string $is_feature
 * @property string $cat_id
 * @property string $brand_id
 * @property string $slug
 *
 * @property Cart[] $carts
 * @property Categories $cat
 * @property Brands $brand
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'price', 'sku', 'quantity', 'available_stock', 'cat_id', 'brand_id', 'slug'], 'required'],
            [['description', 'is_new','is_sale'], 'string'],
            [['price', 'sale_prise'], 'number'],
            [['quantity', 'available_stock', 'cat_id', 'brand_id'], 'integer'],
            [['title', 'image', 'is_feature'], 'string', 'max' => 255],
            [['sku', 'slug'], 'string', 'max' => 150],
            [['sku'], 'unique'],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['cat_id' => 'id']],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brands::className(), 'targetAttribute' => ['brand_id' => 'id']],
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
            'price' => 'Price',
            'sale_prise' => 'Sale Prise',
            'sku' => 'Sku',
            'quantity' => 'Quantity',
            'available_stock' => 'Available Stock',
            'is_new' => 'Is New',
            'is_sale' => 'Is Sale',
            'image' => 'Image',
            'is_feature' => 'Is Feature',
            'cat_id' => 'Cat ID',
            'brand_id' => 'Brand ID',
            'slug' => 'Slug',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarts()
    {
        return $this->hasMany(Cart::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(Categories::className(), ['id' => 'cat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brands::className(), ['id' => 'brand_id']);
    }
}
