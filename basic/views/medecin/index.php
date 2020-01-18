<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MedecinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Medecins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medecin-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Medecin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'code',
            'nom',
            'dateNaissance',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
