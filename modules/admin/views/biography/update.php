<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Biography */

$this->title = 'Обновление биографии:';
$this->params['breadcrumbs'][] = 'Биография';
?>
<div class="biography-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
