<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\modules\admin\assets\AppAdminAsset;
use yii\widgets\Breadcrumbs;

AppAdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= Html::csrfMetaTags() ?>
    <title>Админка | <?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="/images/icon.png" type="image/png" />
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'На сайт',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/admin/']],
            ['label' => 'Альбомы', 'url' => ['/admin/albums/']],
            ['label' => 'Музыка', 'url' => ['/admin/music/']],
            ['label' => 'Новости', 'url' => ['/admin/news']],
            ['label' => 'Интервью', 'url' => ['/admin/interview/']],
            ['label' => 'Видео', 'url' => ['/admin/video/']],
            ['label' => 'Тексты песен', 'url' => ['/admin/texts/']],
            ['label' => 'Фото', 'url' => ['/admin/photo']],
            ['label' => 'Выход (' . Yii::$app->user->identity->username . ')', 'url' => ['/logout']]

        ],
    ]);
    NavBar::end();
    ?>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="container">
        <?=
        Breadcrumbs::widget([
            'homeLink' => [
                'label' => Yii::t('yii', 'Главная'),
                'url' => '/admin/',
            ],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>
        <?php if(Yii::$app->session->hasFlash('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo Yii::$app->session->getFlash('success');?>
            </div>
        <?php endif; ?>

        <?= $content ?>
    </div>

</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

