<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property string $KD_MSG
 * @property string|null $KD_TUKANG
 * @property string|null $KD_USER
 * @property string|null $MSG
 * @property string|null $TGL_MSG
 * @property string $PENG_MSG
 *
 * @property User $kDUSER
 * @property Tukang $kDTUKANG
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KD_MSG', 'PENG_MSG'], 'required'],
            [['MSG'], 'string'],
            [['TGL_MSG'], 'safe'],
            [['KD_MSG', 'KD_TUKANG', 'KD_USER', 'PENG_MSG'], 'string', 'max' => 20],
            [['KD_MSG'], 'unique'],
            [['KD_USER'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['KD_USER' => 'KD_USER']],
            [['KD_TUKANG'], 'exist', 'skipOnError' => true, 'targetClass' => Tukang::className(), 'targetAttribute' => ['KD_TUKANG' => 'KD_TUKANG']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'KD_MSG' => 'Kd Msg',
            'KD_TUKANG' => 'Kd Tukang',
            'KD_USER' => 'Kd User',
            'MSG' => 'Msg',
            'TGL_MSG' => 'Tgl Msg',
            'PENG_MSG' => 'Peng Msg',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKDUSER()
    {
        return $this->hasOne(User::className(), ['KD_USER' => 'KD_USER']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKDTUKANG()
    {
        return $this->hasOne(Tukang::className(), ['KD_TUKANG' => 'KD_TUKANG']);
    }
}
