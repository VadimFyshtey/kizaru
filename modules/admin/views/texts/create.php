<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Texts */

$this->title = 'Добавить текст';
$this->params['breadcrumbs'][] = ['label' => 'Тексты песен', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="texts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
