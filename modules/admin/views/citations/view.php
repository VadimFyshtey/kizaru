<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Citations */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Цитаты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citations-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'content',
            'music',
            [
                'attribute' => 'status',
                'value' => $model->status ? '<span class="text-success">Отображать</span>' : '<span class="text-danger">Не отображать</span>',
                'format' => 'html',

            ],
        ],
    ]) ?>

</div>
