<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tukang */

$this->title = $model->KD_TUKANG;
$this->params['breadcrumbs'][] = ['label' => 'Tukangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
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
            ['label' => 'Kode Tukang',
                'attribute' => 'KD_TUKANG'],
            ['label' => 'Kategori Tukang',    
            'attribute' => 'KD_KTG',],
            ['label' => 'Nama',    
            'attribute' => 'NM_TUKANG'],
            ['label' => 'Email',    
            'attribute' => 'EMAIL_TUKANG'],
            ['label' => 'Email',    
            'attribute' => 'TELP_TUKANG'],
            
                
            
            'ALMT_TUKANG',
        ],
    ]) ?>
       <p>
        <?= Html::a('Update', ['update', 'id' => $model->KD_TUKANG], ['class' => 'btn btn-primary btn-fill']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->KD_TUKANG], [
            'class' => 'btn btn-danger btn-fill',
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
