<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhoneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phone-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Phone', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'number',
                'value' => function($dataProvider){
                    return Yii::$app->formatter->asPhone($dataProvider->number);
                },
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
