<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Update User: ' . $model->KD_USER;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->KD_USER, 'url' => ['view', 'id' => $model->KD_USER]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-update">
<div class="row">
    <div class="col-md-8">
        <div class="card">
         <div class="header">
         <h4 class="title"><?= Html::encode($this->title) ?></h4>
         </div> 
    <hr>
<div class="container-fluid">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
    </div>
    </div>
    </div>
</div>
