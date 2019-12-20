<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RatingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rating-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'KD_RTG') ?>

    <?= $form->field($model, 'KD_USER') ?>

    <?= $form->field($model, 'KD_TUKANG') ?>

    <?= $form->field($model, 'RTG') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
