<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rating */

$this->title = 'Create Rating';
$this->params['breadcrumbs'][] = ['label' => 'Ratings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rating-create">

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
