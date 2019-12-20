<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KategoriTukang;

/**
 * KategoriTukangSearch represents the model behind the search form of `app\models\KategoriTukang`.
 */
class KategoriTukangSearch extends KategoriTukang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KD_KTG', 'NM_KTG'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = KategoriTukang::find();

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
        $query->andFilterWhere(['like', 'KD_KTG', $this->KD_KTG])
            ->andFilterWhere(['like', 'NM_KTG', $this->NM_KTG]);

        return $dataProvider;
    }
}
