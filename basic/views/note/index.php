<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\NoteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Notes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="note-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Note', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            //'name',
	        [
                'attribute' => 'name',
		        'value' => function ($model) {
					return Html::a($model->name, ['note/view', 'id' => $model->id]);
		        },
		        'format' => 'raw',
			],
            //'text:ntext',
            'user_id',
            [
            		'attribute' => 'created_at',
            		'format' => ['date', 'php:d.m.Y H:i:s'],
			],
            [
	                'attribute' => 'updated_at',
	                'format' => ['date', 'php:d.m.Y H:i:s'],
            ],
            //'created_at:date',
            //'updated_at',
            'views',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
