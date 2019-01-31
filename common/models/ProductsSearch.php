<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Products;

/**
 * ProductsSearch represents the model behind the search form of `common\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'quantity', 'available_stock', 'cat_id', 'brand_id'], 'integer'],
            [['title', 'description', 'sku', 'is_new', 'is_sale', 'image', 'is_feature', 'slug', 'best'], 'safe'],
            [['price', 'sale_prise'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Products::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'price' => $this->price,
            'sale_prise' => $this->sale_prise,
            'quantity' => $this->quantity,
            'available_stock' => $this->available_stock,
            'cat_id' => $this->cat_id,
            'brand_id' => $this->brand_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'sku', $this->sku])
            ->andFilterWhere(['like', 'is_new', $this->is_new])
            ->andFilterWhere(['like', 'is_sale', $this->is_sale])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'is_feature', $this->is_feature])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'best', $this->best]);

        return $dataProvider;
    }
}
