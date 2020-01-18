<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsulatationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Consulatations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consulatation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Consulatation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'code',
            'etatPatient',
            'dateConsultation',
            'prix',
            'code_medecin',
            //'code_patient',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
