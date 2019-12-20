<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KategoriTukangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori Tukang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-tukang-index">
<div class="row">
    <div class="col-md-12">
    <div class="card"
    >
        <div class="header">
        <?= 
                            Html::a('<i class="pe-7s-plus"></i> Create User', ['create'], ['class' => 'btn btn-info btn-fill pull-right']);
                ?>
            <h4 class="title"><?= Html::encode($this->title) ?></h4>
        <hr>
        </div>
        
        <div class="card-body">
        <div class="content table-responsive table-full-width">
                <div class="container-fluid">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'tableOptions'=>['class'=>'table table-hover table-striped','style'=>'height:10px'],
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn',
                        'contentOptions'=>['style'=>'width:50px;'
                    ],],
                        'KD_KTG',
                        'NM_KTG',
                        ['class' => 'yii\grid\ActionColumn',
                        'contentOptions'=>['style'=>'width:90px;']
                    ],
                    ],
                
                ]); ?>
                </div>  
                </div>
        </div>
        </div>
    </div>
</div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>




</div>
