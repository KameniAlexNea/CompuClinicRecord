<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HistoriqueSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="historique-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nomTable') ?>

    <?= $form->field($model, 'valeurAv') ?>

    <?= $form->field($model, 'valeurAp') ?>

    <?= $form->field($model, 'isInsert') ?>

    <?php // echo $form->field($model, 'dateModification') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
