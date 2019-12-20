<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\Tukang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tukang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KD_TUKANG')->textInput(['maxlength' => true])->label('Kode Tukang') ?>

    <?= $form->field($model, 'KD_KTG')->widget(Select2::classname(), [
    'data' => $listKategori,
    'language' => 'de',
    'options' => ['placeholder' => 'Pilih Kategori ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
])->label('Kategori Tukang'); ?>

    <?= $form->field($model, 'NM_TUKANG')->textInput(['maxlength' => true])->label('Nama') ?>

    <?= $form->field($model, 'EMAIL_TUKANG')->textInput(['maxlength' => true])->label('Email') ?>

    <?= $form->field($model, 'TELP_TUKANG')->textInput(['maxlength' => true])->label('Telpon') ?>

    <?= $form->field($model, 'ALMT_TUKANG')->textInput(['maxlength' => true])->label('Alamat') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success pull-right btn-fill']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <div class="clearfix"></div>
</div>
