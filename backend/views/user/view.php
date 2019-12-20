<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = "Manajemen User";
$nuser = "Detail User : ".$model->KD_USER;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $nuser;
\yii\web\YiiAsset::register($this);
?>

<div class="user-view">
<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title"><?= Html::encode($nuser) ?></h4>
                <hr>
            </div>
    <div class="content">
    
    <?= 
    DetailView::widget([
        'model' => $model,
        'options'=>['class'=>'table table-hover table-striped'],
        'attributes' => [
            ['label' => 'Kode User',
                'attribute' => 'KD_USER'],
                ['label' => 'Nama',
                'attribute' =>  'NM_USER'], 
                ['label' => 'Email',
                'attribute' =>  'EMAIL_USER'], 
                ['label' => 'Password',
                'attribute' =>  'PASS_USER'], 
                ['label' => 'Telpon',
                'attribute' =>  'TELP_USER'],
                ['label' => 'Tangggal Lahir',
                'attribute' =>  'TTL_USER'],
                ['label' => 'Alamat',
                'attribute' =>  'ALMT_USER'],
                ['label' => 'Alamat',
                'attribute' =>  'ALMT_USER'],
                ['label' => 'Status',
                'attribute' =>  'STATUS_USER'],
        ],
    ]) ?>
            <?= Html::a('Update', ['update', 'id' => $model->KD_USER], ['class' => 'btn btn-primary btn-fill']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->KD_USER], [
            'class' => 'btn btn-danger btn-fill',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
            <div class="clearfix"></div>
</div>  
</div>
</div>
</div>
</div>
        
