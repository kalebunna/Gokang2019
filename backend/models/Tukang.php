<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tukang".
 *
 * @property string $KD_TUKANG
 * @property string|null $KD_KTG
 * @property string|null $NM_TUKANG
 * @property string|null $EMAIL_TUKANG
 * @property string|null $TELP_TUKANG
 * @property string|null $ALMT_TUKANG
 *
 * @property Booking[] $bookings
 * @property Message[] $messages
 * @property Rating[] $ratings
 * @property KategoriTukang $kDKTG
 */
class Tukang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tukang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KD_TUKANG'], 'required'],
            [['KD_TUKANG', 'KD_KTG'], 'string', 'max' => 20],
            [['NM_TUKANG', 'EMAIL_TUKANG'], 'string', 'max' => 50],
            [['TELP_TUKANG'], 'string', 'max' => 12],
            [['ALMT_TUKANG'], 'string', 'max' => 100],
            [['KD_TUKANG'], 'unique'],
            [['KD_KTG'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriTukang::className(), 'targetAttribute' => ['KD_KTG' => 'KD_KTG']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'KD_TUKANG' => 'Kd Tukang',
            'KD_KTG' => 'Kd Ktg',
            'NM_TUKANG' => 'Nm Tukang',
            'EMAIL_TUKANG' => 'Email Tukang',
            'TELP_TUKANG' => 'Telp Tukang',
            'ALMT_TUKANG' => 'Almt Tukang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['KD_TUKANG' => 'KD_TUKANG']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMessages()
    {
        return $this->hasMany(Message::className(), ['KD_TUKANG' => 'KD_TUKANG']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRatings()
    {
        return $this->hasMany(Rating::className(), ['KD_TUKANG' => 'KD_TUKANG']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKDKTG()
    {
        return $this->hasOne(KategoriTukang::className(), ['KD_KTG' => 'KD_KTG']);
    }
}
