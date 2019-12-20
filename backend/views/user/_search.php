<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'KD_USER') ?>

    <?= $form->field($model, 'EMAIL_USER') ?>

    <?= $form->field($model, 'PASS_USER') ?>

    <?= $form->field($model, 'TELP_USER') ?>

    <?= $form->field($model, 'NM_USER') ?>

    <?php // echo $form->field($model, 'TTL_USER') ?>

    <?php // echo $form->field($model, 'ALMT_USER') ?>

    <?php // echo $form->field($model, 'STATUS_USER') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
