<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KategoriTukang */

$this->title = 'Update Kategori Tukang: ' . $model->KD_KTG;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Tukangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->KD_KTG, 'url' => ['view', 'id' => $model->KD_KTG]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-tukang-update">
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
