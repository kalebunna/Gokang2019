<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @vKodear $model app\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>

<div Kodeclass="booking-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KD_BOOKING')->textInput(['maxlength' => true])->label('Kode Booking') ?>

    <?= $form->field($model, 'KD_USER')->textInput(['maxlength' => true])->label('Kode User') ?>

    <?= $form->field($model, 'KD_TUKANG')->textInput(['maxlength' => true])->label('Kode Tukang') ?>

    <?= $form->field($model, 'TGL_BOOKING')->textInput()->label('Tanggal') ?>

    <?= $form->field($model, 'KET_BOOKING')->textInput(['maxlength' => true])->label('keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-fill btn-success btn-fill pull-right']) ?>
    </div>

    <div class="clearfix"></div>
    <?php ActiveForm::end(); ?>

</div>
