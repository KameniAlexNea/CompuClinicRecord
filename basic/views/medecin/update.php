<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Medecin */

$this->title = 'Update Medecin: ' . $model->code;
$this->params['breadcrumbs'][] = ['label' => 'Medecins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->code, 'url' => ['view', 'id' => $model->code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medecin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
