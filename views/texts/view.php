<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yeesoft\comments\widgets\Comments;
use yii\widgets\Pjax;
?>
<article itemscope itemtype="http://schema.org/Article">
<h2 itemprop="name">Kizaru текст песни : <?= $texts->name ?></h2>
    <div class="breadcrumbs">
        <?= Breadcrumbs::widget([
            'itemTemplate' => "<li>{link}</li>\n", // template for all links
            'links' => [
                [
                    'label' => 'Тексты песен',
                    'url' => ['texts/index'],
                ],
                ['label' => $texts->name],
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
    <div class="texts_view" itemprop="articleBody">
        <p><?= $texts->content ?></p>
    </div>
    <br/>
    <div class="texts_view_info">
        <?php echo Html::button('Назад',array('onclick'=>'js:history.go(-1);returnFalse;','style'=>'font-size: 14px;font-weight: bold;'));  ?>
        <?php if(!empty($texts->album)): ?>
            <h5><b>Альбом:</b> <?= $texts->album ?></h5>
        <?php endif; ?>
        <h6><i class="glyphicon glyphicon-eye-open"></i> Просмотры: <?= $texts  ->view ?></h6>
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
        <?php if(!Yii::$app->user->isGuest) :?>
            <h6><i class="glyphicon glyphicon-pencil"></i> <a href="<?= Url::to(['/admin/texts/update/', 'id' => $texts->id]) ?>"  target="_blank" rel="nofollow">Редактировать</a></h6>
        <?php endif;?>
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
        <h3 class="title_popul">Другие тексты песен</h3>
        <ul class="popul_list">
            <?= \app\components\TextPopulWidget::widget(['tpl' => 'textPopul']) ?>
        </ul>
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
        <?= Comments::widget(['model' => $texts]); ?>
    </div>
</article>