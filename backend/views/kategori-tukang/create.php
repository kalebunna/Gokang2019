<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KategoriTukang */

$this->title = 'Create Kategori Tukang';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Tukangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-tukang-create">
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
