<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */

$this->title = 'Update Booking: ' . $model->KD_BOOKING;
$this->params['breadcrumbs'][] = ['label' => 'Bookings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->KD_BOOKING, 'url' => ['view', 'id' => $model->KD_BOOKING]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-update">
<div class="row">
    <div class="col-md-8">
        <div class="card">
         <div class="header">
         <h4 class="title"><?= Html::encode($this->title) ?></h4>
         </div> 
    <hr>
        <div class="content">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>

    </div>
    </div>
    </div>
</div>
