<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = 'Ошибка 404 | Kizaru - фан сайт';
?>
<div class="site-error">

    <h2>Ошибка 404</h2>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Страница удалена или её пока что не создали. Перейдите пожалуйста на <a href="/">главную</a> страницу.
    </p>
</div>
