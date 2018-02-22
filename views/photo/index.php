<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>
<section class="photo">
    <h2>Kizaru фото</h2>

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

    <?php foreach ($photo as $item): ?>
    <?php $mainImage = $item->getImage(); ?>
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <a href="<?= Url::to("/images/upload/store/{$mainImage->filePath}") ?>" data-toggle="lightbox">
            <?= Html::img("@web/images/upload/store/{$mainImage->filePath}", ['alt' => 'Kizaru', 'class' => 'page_photo_image' , 'title' => 'Kizaru'])?>
        </a>
        <?php if(!Yii::$app->user->isGuest) :?>
            <h6><a href="<?= Url::to(['/site/destroy', 'id' => $item->id]) ?>" rel="nofollow">Удалить</a></h6>
        <?php endif;?>
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

