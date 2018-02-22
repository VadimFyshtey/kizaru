<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Citations */

$this->title = 'Добавить цитату';
$this->params['breadcrumbs'][] = ['label' => 'Цитаты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citations-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
