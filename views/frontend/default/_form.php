<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\cevrimici */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cevrimici-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eposta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'konu')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'icerik')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
