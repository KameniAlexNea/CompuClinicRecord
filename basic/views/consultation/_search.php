<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConsulatationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consulatation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'code') ?>

    <?= $form->field($model, 'etatPatient') ?>

    <?= $form->field($model, 'dateConsultation') ?>

    <?= $form->field($model, 'prix') ?>

    <?= $form->field($model, 'code_medecin') ?>

    <?php // echo $form->field($model, 'code_patient') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
