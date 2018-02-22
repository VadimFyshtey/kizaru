<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Music */

$this->title = 'Добавить песню';
$this->params['breadcrumbs'][] = ['label' => 'Музыка', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="music-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
