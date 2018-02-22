<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\entities\MusicSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="music-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
//        'options' => [
//            'data-pjax' => 1
//        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'album') ?>

    <?= $form->field($model, 'file') ?>

    <?= $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
