<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Interview */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Интервью', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="interview-view">

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
    <?php $img = $model->getImage(); ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'short_content',
            'content:ntext',
            'date',
            [
                'attribute' => 'status',
                'value' => $model->status ? '<span class="text-success">Отображать</span>' : '<span class="text-danger">Не отображать</span>',
                'format' => 'html',

            ],
            'view',
            [
                'attribute' => 'image',
                'value' => "<img width='400px'  src='/web/images/upload/store/{$img->filePath}' alt='Kizaru' title='KIZARU'/>",
                'format' => 'html',
            ],
            'alias',
            'title_seo',
            'description_seo',
        ],
    ]) ?>

</div>
