<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KD_USER')->textInput(['maxlength' => true])->label('Kode User') ?>

    <?= $form->field($model, 'EMAIL_USER')->textInput(['maxlength' => true])->label('Email') ?>

    <?= $form->field($model, 'PASS_USER')->textInput(['maxlength' => true])->label('Password') ?>

    <?= $form->field($model, 'TELP_USER')->textInput(['maxlength' => true])->label('Telpon') ?>

    <?= $form->field($model, 'NM_USER')->textInput(['maxlength' => true])->label('Nama') ?>

    <?= $form->field($model, 'TTL_USER')->textInput()->label('Tanggal Lahir') ?>

    <?= $form->field($model, 'ALMT_USER')->textInput(['maxlength' => true])->label('Alamat') ?>

    <?= $form->field($model, 'STATUS_USER')->textInput(['maxlength' => true])->label('Status') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-fill pull-right']) ?>
    </div>
    <div class="clearfix"></div>
    <?php ActiveForm::end(); ?>

</div>
