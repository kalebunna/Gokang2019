<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Booking;

/**
 * BookingSearch represents the model behind the search form of `app\models\Booking`.
 */
class BookingSearch extends Booking
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KD_BOOKING', 'KD_USER', 'KD_TUKANG', 'TGL_BOOKING', 'KET_BOOKING'], 'safe'],
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
        $query = Booking::find();

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
            'TGL_BOOKING' => $this->TGL_BOOKING,
        ]);

        $query->andFilterWhere(['like', 'KD_BOOKING', $this->KD_BOOKING])
            ->andFilterWhere(['like', 'KD_USER', $this->KD_USER])
            ->andFilterWhere(['like', 'KD_TUKANG', $this->KD_TUKANG])
            ->andFilterWhere(['like', 'KET_BOOKING', $this->KET_BOOKING]);

        return $dataProvider;
    }
}
