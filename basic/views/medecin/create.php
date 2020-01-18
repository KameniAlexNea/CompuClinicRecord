<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Medecin */

$this->title = 'Create Medecin';
$this->params['breadcrumbs'][] = ['label' => 'Medecins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medecin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
