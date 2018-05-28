<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\cevrimici */

$this->title = 'Update Cevrimici: ' . $model->cevrimciID;
$this->params['breadcrumbs'][] = ['label' => 'Cevrimicis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cevrimciID, 'url' => ['view', 'id' => $model->cevrimciID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cevrimici-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
