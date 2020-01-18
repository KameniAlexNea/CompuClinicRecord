<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Consulatation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consulatation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code')->textInput() ?>

    <?= $form->field($model, 'etatPatient')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateConsultation')->textInput() ?>

    <?= $form->field($model, 'prix')->textInput() ?>

    <?= $form->field($model, 'code_medecin')->textInput() ?>

    <?= $form->field($model, 'code_patient')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
