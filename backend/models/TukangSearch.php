<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tukang;

/**
 * TukangSearch represents the model behind the search form of `app\models\Tukang`.
 */
class TukangSearch extends Tukang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KD_TUKANG', 'KD_KTG', 'NM_TUKANG', 'EMAIL_TUKANG', 'TELP_TUKANG', 'ALMT_TUKANG'], 'safe'],
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
        $query = Tukang::find();

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
        $query->andFilterWhere(['like', 'KD_TUKANG', $this->KD_TUKANG])
            ->andFilterWhere(['like', 'KD_KTG', $this->KD_KTG])
            ->andFilterWhere(['like', 'NM_TUKANG', $this->NM_TUKANG])
            ->andFilterWhere(['like', 'EMAIL_TUKANG', $this->EMAIL_TUKANG])
            ->andFilterWhere(['like', 'TELP_TUKANG', $this->TELP_TUKANG])
            ->andFilterWhere(['like', 'ALMT_TUKANG', $this->ALMT_TUKANG]);

        return $dataProvider;
    }
}
