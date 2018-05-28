<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\cevrimici */

$this->title = 'Create Cevrimici';
$this->params['breadcrumbs'][] = ['label' => 'Cevrimicis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cevrimici-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
