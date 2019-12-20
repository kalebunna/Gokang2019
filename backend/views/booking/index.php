<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Booking';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-index">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
            <?= 
                            Html::a('<i class="pe-7s-plus"></i> Create User', ['create'], ['class' => 'btn btn-info btn-fill pull-right']);
                ?>         
                <h4 class="title"><?= Html::encode($this->title) ?></h4> 
                <?php // echo $this->render('_search', ['model' => $searchModel]); 
                ?>
                <hr>
            </div>
    <div class="content table-responsive table-full-width">
        <div class="container-fluid">
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions'=>['class'=>'table table-hover table-striped','style'=>'height:10px'],
            'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'KD_BOOKING',
            'KD_USER',
            'KD_TUKANG',
            'TGL_BOOKING',
            'KET_BOOKING',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>      
    </div>  
    </div>
    </div>
</div>
