<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Interview */

$this->title = 'Добавить интервью';
$this->params['breadcrumbs'][] = ['label' => 'Интервью', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="interview-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
