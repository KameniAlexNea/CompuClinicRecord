<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Consulatation */

$this->title = 'Create Consulatation';
$this->params['breadcrumbs'][] = ['label' => 'Consulatations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consulatation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
