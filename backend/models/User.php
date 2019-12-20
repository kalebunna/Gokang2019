<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $KD_USER
 * @property string|null $EMAIL_USER
 * @property string|null $PASS_USER
 * @property string|null $TELP_USER
 * @property string|null $NM_USER
 * @property string|null $TTL_USER
 * @property string|null $ALMT_USER
 * @property string|null $STATUS_USER
 *
 * @property Booking[] $bookings
 * @property Message[] $messages
 * @property Rating[] $ratings
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KD_USER'], 'required'],
            [['TTL_USER'], 'safe'],
            [['KD_USER', 'EMAIL_USER', 'PASS_USER', 'STATUS_USER'], 'string', 'max' => 20],
            [['TELP_USER'], 'string', 'max' => 12],
            [['NM_USER'], 'string', 'max' => 50],
            [['ALMT_USER'], 'string', 'max' => 100],
            [['KD_USER'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'KD_USER' => 'Kode User',
            'EMAIL_USER' => 'Email',
            'PASS_USER' => 'Password',
            'TELP_USER' => 'Telpon',
            'NM_USER' => 'Nama',
            'TTL_USER' => 'Tanggal Lahir',
            'ALMT_USER' => 'Alamat',
            'STATUS_USER' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['KD_USER' => 'KD_USER']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMessages()
    {
        return $this->hasMany(Message::className(), ['KD_USER' => 'KD_USER']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRatings()
    {
        return $this->hasMany(Rating::className(), ['KD_USER' => 'KD_USER']);
    }
}
