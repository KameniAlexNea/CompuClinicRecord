<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Consulatation */

$this->title = 'Update Consulatation: ' . $model->code;
$this->params['breadcrumbs'][] = ['label' => 'Consulatations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->code, 'url' => ['view', 'id' => $model->code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="consulatation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
