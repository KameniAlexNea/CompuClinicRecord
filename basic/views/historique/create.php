<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Historique */

$this->title = 'Create Historique';
$this->params['breadcrumbs'][] = ['label' => 'Historiques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historique-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
