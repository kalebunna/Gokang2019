<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\KategoriTukang */

$this->title = $model->KD_KTG;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Tukangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kategori-tukang-view">
<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title"><?= Html::encode($this->title) ?></h4>
            <hr>
            </div>
    <div class="content">   
    <?= DetailView::widget([
        'options'=>['class'=>'table table-hover table-striped'],
        'model' => $model,
        'attributes' => [
            'KD_KTG',
            'NM_KTG',
        ],
    ]) ?>
            <?= Html::a('Update', ['update', 'id' => $model->KD_KTG], ['class' => 'btn btn-primary btn-fill']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->KD_KTG], [
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
