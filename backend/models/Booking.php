<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property string $KD_BOOKING
 * @property string|null $KD_USER
 * @property string|null $KD_TUKANG
 * @property string|null $TGL_BOOKING
 * @property string|null $KET_BOOKING
 *
 * @property Tukang $kDTUKANG
 * @property User $kDUSER
 */
class Booking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KD_BOOKING'], 'required'],
            [['TGL_BOOKING'], 'safe'],
            [['KD_BOOKING', 'KD_USER', 'KD_TUKANG'], 'string', 'max' => 20],
            [['KET_BOOKING'], 'string', 'max' => 100],
            [['KD_BOOKING'], 'unique'],
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
            'KD_BOOKING' => 'Kd Booking',
            'KD_USER' => 'Kd User',
            'KD_TUKANG' => 'Kd Tukang',
            'TGL_BOOKING' => 'Tgl Booking',
            'KET_BOOKING' => 'Ket Booking',
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
