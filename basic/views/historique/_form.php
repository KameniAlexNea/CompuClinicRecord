<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Historique */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="historique-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomTable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valeurAv')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'valeurAp')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'isInsert')->textInput() ?>

    <?= $form->field($model, 'dateModification')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
