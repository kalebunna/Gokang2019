<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * UserSearch represents the model behind the search form of `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KD_USER', 'EMAIL_USER', 'PASS_USER', 'TELP_USER', 'NM_USER', 'TTL_USER', 'ALMT_USER', 'STATUS_USER'], 'safe'],
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
        $query = User::find();

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
            'TTL_USER' => $this->TTL_USER,
        ]);

        $query->andFilterWhere(['like', 'KD_USER', $this->KD_USER])
            ->andFilterWhere(['like', 'EMAIL_USER', $this->EMAIL_USER])
            ->andFilterWhere(['like', 'PASS_USER', $this->PASS_USER])
            ->andFilterWhere(['like', 'TELP_USER', $this->TELP_USER])
            ->andFilterWhere(['like', 'NM_USER', $this->NM_USER])
            ->andFilterWhere(['like', 'ALMT_USER', $this->ALMT_USER])
            ->andFilterWhere(['like', 'STATUS_USER', $this->STATUS_USER]);

        return $dataProvider;
    }
}
