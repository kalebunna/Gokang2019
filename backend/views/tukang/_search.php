<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TukangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tukang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'KD_TUKANG') ?>

    <?= $form->field($model, 'KD_KTG') ?>

    <?= $form->field($model, 'NM_TUKANG') ?>

    <?= $form->field($model, 'EMAIL_TUKANG') ?>

    <?= $form->field($model, 'TELP_TUKANG') ?>

    <?php // echo $form->field($model, 'ALMT_TUKANG') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
