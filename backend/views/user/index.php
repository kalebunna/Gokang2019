<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;
use yii\helpers\Url;
use rmrevin\yii\fontawesome\FA;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-index">
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
                ['class' => 'yii\grid\SerialColumn',
                'contentOptions'=>['style'=>'width:50px;'],
                ],
                [ 
                'contentOptions'=>['style'=>'width:150px;'],
                'label' => 'Kode User',
                'attribute' => 'KD_USER'],
                ['label' => 'Nama',
                'attribute' =>  'NM_USER'], 
                ['label' => 'Email',
                'attribute' =>  'EMAIL_USER'], 
                ['label' => 'Password',
                'attribute' =>  'PASS_USER'], 
                ['label' => 'Telpon',
                'attribute' =>  'TELP_USER'], 
             
            //'TTL_USER',
            //'ALMT_USER',
            //'STATUS_USER',
            [
            'class' => 'yii\grid\ActionColumn',
            'template'=>'{view}{delete}{update}',
        ],
        ],]);

    echo LinkPager::widget(['pagination'=>$pages]); 
    ?>
    </div>      
    </div>  
    </div>
    </div>
</div>
    


</div>
