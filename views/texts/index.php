<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\Breadcrumbs;
use yii\widgets\Pjax;
?>
<section>
<h2>Kizaru текcты песен</h2>
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : ['Тексты песен'],
    ]) ?>

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
<table class="bordered">
    <thead>
        <tr>   
            <th>Трек</th>
            <th>Альбом</th>
        </tr>
    </thead>
     <?php foreach ($texts as $text): ?>
    <tr>
        <td class="td_link"><p><a href="<?= Url::to(['texts/view', 'alias' => $text['alias']]) ?>"><?= $text['name'] ?></a></p></td>
        <td class="td_link"><p><a href="<?= Url::to(['texts/view', 'alias' => $text['alias']]) ?>"><?= $text['album'] ?></a></p></td>
    </tr>
     <?php endforeach; ?>
</table>
<div class="align_center">
<div class="pagination">
    <?php
        echo LinkPager::widget([
        'pagination' => $pages,
        ]);
    ?>
</div>
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