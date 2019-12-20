<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KategoriTukang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-tukang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KD_KTG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NM_KTG')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn pull-right btn-success btn-fill']) ?>
    </div>

    <?php ActiveForm::end(); ?>
<div class="clearfix"></div>
</div>
