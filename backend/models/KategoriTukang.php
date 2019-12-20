<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategori_tukang".
 *
 * @property string $KD_KTG
 * @property string|null $NM_KTG
 *
 * @property Tukang[] $tukangs
 */
class KategoriTukang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_tukang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KD_KTG'], 'required'],
            [['KD_KTG', 'NM_KTG'], 'string', 'max' => 20],
            [['KD_KTG'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'KD_KTG' => 'Kd Ktg',
            'NM_KTG' => 'Nm Ktg',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTukangs()
    {
        return $this->hasMany(Tukang::className(), ['KD_KTG' => 'KD_KTG']);
    }
}
