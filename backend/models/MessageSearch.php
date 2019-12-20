<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Message;

/**
 * MessageSearch represents the model behind the search form of `app\models\Message`.
 */
class MessageSearch extends Message
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KD_MSG', 'KD_TUKANG', 'KD_USER', 'MSG', 'TGL_MSG', 'PENG_MSG'], 'safe'],
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
        $query = Message::find();

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
            'TGL_MSG' => $this->TGL_MSG,
        ]);

        $query->andFilterWhere(['like', 'KD_MSG', $this->KD_MSG])
            ->andFilterWhere(['like', 'KD_TUKANG', $this->KD_TUKANG])
            ->andFilterWhere(['like', 'KD_USER', $this->KD_USER])
            ->andFilterWhere(['like', 'MSG', $this->MSG])
            ->andFilterWhere(['like', 'PENG_MSG', $this->PENG_MSG]);

        return $dataProvider;
    }
}
