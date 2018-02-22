<?php
use yii\widgets\LinkPager;
use yii\widgets\Pjax;
?>
<section class="video">
    <h2>Видео с Kizaru</h2>

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

    <?php foreach ($video as $item): ?>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <h3><?= $item['name'] ?></h3>
            <p><?= $item['url'] ?></p>
            <div class="clearfix"></div>
        </div>
    <?php endforeach; ?>
    <div class="clearfix"></div>
    <div class="pagination">
        <?php
        echo LinkPager::widget([
            'pagination' => $pages,
        ]);
        ?>
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

</section>