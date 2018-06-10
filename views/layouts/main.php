<?php

use yii\helpers\Html;
use app\assets\AppAsset;
use app\components\CitationsWidget;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>">
<head>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-2586863288185463",
            enable_page_level_ads: true
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-102624075-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-102624075-2');
    </script>
    <meta name="yandex-verification" content="4b0fe9c7b5cace16" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?= Html::csrfMetaTags() ?>
    <link rel="shortcut icon" href="/images/icon.png" type="image/x-icon">
<?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<head   er>
    <div class="container">
        <div class="col-lg-3 col-md-3 col-xs-5">
            <a href="/"><?= Html::img('@web/images/kizaru_logo.png', ['class' => 'kizaru_logo pull-left', 'alt' => 'Kizaru', 'title' => 'Kizaru']) ?></a>
        </div>
        <div class="col-lg-7 col-md-7 col-xs-7 header_text">
            <h1>Kizaru - хип-хоп исполнитель, рэпер</h1>
            <div>
                Kizaru – рэпер из Санкт-Петербурга, не стесняющийся открыто говорить о запрещённых веществах и
                связанном с ними бизнесе. Входит в состав Haunted Family.
            </div>
            <div class="carusel citations_block hidden-md hidden-xs hidden-sm">
                <?= CitationsWidget::widget(['tpl' => 'citations']) ?>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 hidden-xs hidden-sm">
            <?= Html::img('@web/images/hf_logo.png', ['class' => 'hf_logo pull-right', 'alt' => 'Haunted Family', 'title' => 'Haunted Family']) ?>
        </div>
    </div>
</header>
<div class="container">
    <nav class="navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/"><span class="glyphicon glyphicon-home"></span></a>
                        </li>
                        <li>
                            <a href="/biography">Биография</a>
                        </li>
                        <li>
                            <a href="/albums">Альбомы</a>
                        </li>
                        <li>
                            <a href="/music">Музыка</a>
                        </li>
                        <li>
                            <a href="/news">Новости</a>
                        </li>
                        <li>
                            <a href="/interview">Интервью</a>
                        </li>
                        <li>
                            <a href="/video">Видео</a>
                        </li>
                        <li>
                            <a href="/texts">Тексты песен</a>
                        </li>
                        <li>
                            <a href="/photo">Фото</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="container ">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
        <?= $content; ?>
        <div class="clearfix"></div>

    </div>
</div>
<div class="container">
    <footer>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8 footer_text">
            <?= date('Y') ?> <a href="/">kizaru.com.ru</a> by <a href="<?= Url::to(['site/by88']) ?>">88</a>
            <h6><a href="<?= Url::to(['site/copyright']) ?>">Правообладателям</a></h6>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 pull-right social">
            <a class="pull-right" href="https://www.youtube.com/channel/UCJ86fLVg90qjqbZmnt0uyYw" rel="nofollow" target="_blank"><img src="/images/youtube.png" alt="Кизару" title="Кизару"></a>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 pull-right social">
            <a class="pull-right" href="https://t.me/rap_american" rel="nofollow" target="_blank"><img src="/images/telegram.png" alt="Кизару" title="Кизару"></a>
        </div>
    </footer>
</div>
<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>