<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TukangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tukang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tukang-index">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
            <?= 
                            Html::a('<i class="pe-7s-plus"></i> Create User', ['create'], ['class' => 'btn btn-info btn-fill pull-right']);
                ?>
                <h4 class="title"><?= Html::encode($this->title) ?></h4>
            <hr>
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            </div>
            <div class="card-body">
                <div class="content table-responsive table-full-width">
                <div class="container-fluid">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'tableOptions'=>['class'=>'table table-hover table-striped','style'=>'height:10px'],
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        ['label'=>'Kode'    ,
                        'attribute' =>'KD_TUKANG'
                        ],
                        [
                        'label'=>'Kategori Tukang',
                        'attribute'=>'KD_KTG'
                        ],
                        [
                        'label'=>'Nama',
                        'attribute'=>'NM_TUKANG',
                        ],
                        [
                        'label'=>'Nama',
                        'attribute'=>'EMAIL_TUKANG',    
                        ],
                        [
                            'label'=>'Telpon',
                            'attribute'=>'TELP_TUKANG',    
                            
                            ],
                        //'ALMT_TUKANG',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
    
   

</div>
