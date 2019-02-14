<?php

namespace  common\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "products".
 *
 * @property string $id
 * @property string $title
 * @property string $description
 * @property string $manufacturer
 * @property string $content
 * @property double $price
 * @property double $sale_price
 * @property string $sizes
 * @property string $sku
 * @property int $quantity
 * @property int $available_stock
 * @property int $best
 * @property string $is_new
 * @property string $is_sale
 * @property string $image
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
            [['title', 'price', 'sku', 'sizes', 'quantity', 'available_stock', 'cat_id', 'brand_id'], 'required'],
            [['description', 'manufacturer', 'content','is_new', 'sizes','is_sale'], 'string'],
            [['price', 'sale_price'], 'number'],
            [['quantity', 'available_stock', 'best', 'cat_id', 'brand_id'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
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
            'manufacturer' => 'Manufacturer',
            'content' => 'Content',
            'price' => 'Price',
            'sale_price' => 'Sale Price',
            'sizes' => 'Sizes',
            'sku' => 'Sku',
            'quantity' => 'Quantity',
            'available_stock' => 'Available Stock',
            'is_new' => 'Is New',
            'is_sale' => 'Is Sale',
            'image' => 'Image',
            'cat_id' => 'Categories',
            'brand_id' => 'Brands',
            'slug' => 'Slug',
            'best' => 'Best',
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
