<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\InterviewSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Интервью';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="interview-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить интервью', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'short_content',
//            'content:ntext',
//            'date',
            [
                'attribute' => 'status',
                'value' => function($data){
                    return $data->status ? '<span class="text-success">Отображать</span>' : '<span class="text-danger">Не отображать</span>';
                },
                'format' => 'html',
            ],
            //'view',
            //'alias',
            //'title_seo',
            //'description_seo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
