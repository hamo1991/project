<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "orderitems".
 *
 * @property string $id
 * @property string $orders_id
 * @property string $product_id
 * @property string $title
 * @property double $price
 * @property int $qty_item
 * @property double $sum_item
 *
 * @property Orders $orders
 */
class Orderitems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orderitems';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['orders_id', 'product_id', 'title', 'price', 'qty_item', 'sum_item'], 'required'],
            [['orders_id', 'product_id', 'qty_item'], 'integer'],
            [['price', 'sum_item'], 'number'],
            [['title'], 'string', 'max' => 255],
            [['orders_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::className(), 'targetAttribute' => ['orders_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'orders_id' => 'Orders ID',
            'product_id' => 'Product ID',
            'title' => 'Title',
            'price' => 'Price',
            'qty_item' => 'Qty Item',
            'sum_item' => 'Sum Item',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasOne(Orders::className(), ['id' => 'orders_id']);
    }
}
