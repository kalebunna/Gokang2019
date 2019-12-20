<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Message */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="message-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KD_MSG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_TUKANG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_USER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MSG')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'TGL_MSG')->textInput() ?>

    <?= $form->field($model, 'PENG_MSG')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
