<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */

$this->title = $model->KD_BOOKING;
$this->params['breadcrumbs'][] = ['label' => 'Bookings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="booking-view">

<div class="tukang-view">
<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">Edit User :  <?= Html::encode($this->title) ?></h4>
                <hr>
            </div>
            <div class="content">   
    <?= DetailView::widget([
        'model' => $model,
        'options'=>['class'=>'table table-hover table-striped'],
        'attributes' => [
            ['label'=>'Kode Boking',
            'attribute'=>'KD_BOOKING'
            ],
            ['label'=>'Kode User',
            'attribute'=>'KD_USER'
            ],
            ['label'=>'Tukang',
            'attribute'=>'KD_TUKANG'
            ],
            ['label'=>'Tanggal Booking',
            'attribute'=>'TGL_BOOKING'
            ],
            ['label'=>'Keterangan',
            'attribute'=>'KET_BOOKING'
            ],
        ],
    ]) ?>
        <p>
        <?= Html::a('Update', ['update', 'id' => $model->KD_BOOKING], ['class' => 'btn btn-primary btn-fill']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->KD_BOOKING], [
            'class' => 'btn btn-fill btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div class="clearfix"></div>
</div>  
</div>
</div>
</div>
</div>
