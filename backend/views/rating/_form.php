<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rating */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rating-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KD_RTG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_USER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_TUKANG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RTG')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
