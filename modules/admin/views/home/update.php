<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Home */

$this->title = 'Обновить главную страницу';
$this->params['breadcrumbs'][] = 'Домашняя страница';
?>
<div class="home-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
