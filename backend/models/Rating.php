<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rating".
 *
 * @property string $KD_RTG
 * @property string|null $KD_USER
 * @property string|null $KD_TUKANG
 * @property int|null $RTG
 *
 * @property Tukang $kDTUKANG
 * @property User $kDUSER
 */
class Rating extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rating';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KD_RTG'], 'required'],
            [['RTG'], 'integer'],
            [['KD_RTG', 'KD_USER', 'KD_TUKANG'], 'string', 'max' => 20],
            [['KD_RTG'], 'unique'],
            [['KD_TUKANG'], 'exist', 'skipOnError' => true, 'targetClass' => Tukang::className(), 'targetAttribute' => ['KD_TUKANG' => 'KD_TUKANG']],
            [['KD_USER'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['KD_USER' => 'KD_USER']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'KD_RTG' => 'Kd Rtg',
            'KD_USER' => 'Kd User',
            'KD_TUKANG' => 'Kd Tukang',
            'RTG' => 'Rtg',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKDTUKANG()
    {
        return $this->hasOne(Tukang::className(), ['KD_TUKANG' => 'KD_TUKANG']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKDUSER()
    {
        return $this->hasOne(User::className(), ['KD_USER' => 'KD_USER']);
    }
}
