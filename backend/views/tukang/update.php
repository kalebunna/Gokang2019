<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tukang */

$this->title = 'Update Tukang: ' . $model->KD_TUKANG;
$this->params['breadcrumbs'][] = ['label' => 'Tukangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->KD_TUKANG, 'url' => ['view', 'id' => $model->KD_TUKANG]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tukang-update">
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
