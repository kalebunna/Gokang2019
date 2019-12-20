<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MessageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="message-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'KD_MSG') ?>

    <?= $form->field($model, 'KD_TUKANG') ?>

    <?= $form->field($model, 'KD_USER') ?>

    <?= $form->field($model, 'MSG') ?>

    <?= $form->field($model, 'TGL_MSG') ?>

    <?php // echo $form->field($model, 'PENG_MSG') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
