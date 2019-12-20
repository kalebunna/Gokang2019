<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tukang */

$this->title = 'Create Tukang';
$this->params['breadcrumbs'][] = ['label' => 'Tukangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tukang-create">

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
        'listKategori'=> $listKategori
    ]) ?>
    <div class="clearfix"></div>
</div>
    </div>
    </div>
    </div>
</div>
