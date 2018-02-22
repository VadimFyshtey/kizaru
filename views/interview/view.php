<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yeesoft\comments\widgets\Comments;
use yii\widgets\Pjax;
$mainImage = $interview->getImage();
?>
<article class="view_article" itemscope itemtype="http://schema.org/Article">
    <h2 itemprop="name"><?= $interview->name ?></h2>
    <div class="breadcrumbs">
        <?= Breadcrumbs::widget([
            'itemTemplate' => "<li>{link}</li>\n", // template for all links
            'links' => [
                [
                    'label' => 'Интервью',
                    'url' => ['interview/index'],
                ],
                ['label' => $interview->name],
            ],
        ]); ?>
    </div>

    <!--Реклама-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Kizaru-New -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-2586863288185463"
         data-ad-slot="4340299339"
         data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    <!--Реклама-->

    <br/>
    <div class="image_align_center"><?= Html::img("@web/images/upload/store/{$mainImage->filePath}", ['alt' => $interview->name, 'class' => 'view_article_image', 'title' => $interview->name, 'itemprop' => 'image'])?></div>
    <div class="view_text" itemprop="articleBody"><?= $interview->content ?></div>
    <div class="clearfix"></div>
    <div class="pull-left date_and_view_article">
        <h6><i class="glyphicon glyphicon-eye-open"></i> <b>Просмотры:</b> <?= $interview->view ?></h6>
        <h6><b>Дата публикации:</b><span itemprop="datePublished"> <?= $interview->date ?></span></h6>
        <?php if(!Yii::$app->user->isGuest) :?>
            <h6><i class="glyphicon glyphicon-pencil"></i> <a href="<?= Url::to(['/admin/interview/update/', 'id' => $interview->id]) ?>"  target="_blank" rel="nofollow">Редактировать</a></h6>
        <?php endif;?>
        <script type="text/javascript">(function() {
                if (window.pluso)if (typeof window.pluso.start == "function") return;
                if (window.ifpluso==undefined) { window.ifpluso = 1;
                    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                    var h=d[g]('body')[0];
                    h.appendChild(s);
                }})();</script>
        <div class="pluso" data-background="#ebebeb" data-options="small,square,line,horizontal,counter,theme=02" data-services="vkontakte,odnoklassniki,facebook,twitter"></div>
        <br />
        <?php echo Html::button('Назад',array('onclick'=>'js:history.go(-1);returnFalse;','style'=>'font-size: 14px;font-weight: bold;'));  ?>
    </div>
    <div class="clearfix"></div>

    <!--Реклама-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Kizaru-New -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-2586863288185463"
         data-ad-slot="4340299339"
         data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    <!--Реклама-->

    <hr/>
    <h3 class="title_popul">Другие интервью</h3>
    <div class="carusel_popul">
        <?= \app\components\InterviewPopulWidget::widget(['tpl' => 'interviewPopul']) ?>
    </div>
    <hr/>

    <!--Реклама-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Kizaru-New -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-2586863288185463"
         data-ad-slot="4340299339"
         data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    <!--Реклама-->

    <div class="clearfix"></div>
    <?= Comments::widget(['model' => $interview]); ?>
</article>