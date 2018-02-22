<?php
use yii\widgets\ListView;
use yii\widgets\Breadcrumbs;
?>
<section class="all_article">
    <h2>Kizaru интервью</h2>
    <div class="breadcrumbs">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : ['Интервью'],
        ]) ?>
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

    <h5 class="sort">Сортировать по: <?= $sort->link('date') ?> | <?= $sort->link('view') ?></h5>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'layout' => "{summary}\n{items}\n<div align='center'>{pager}</div>",
        'itemView' => 'index_list',
        'summary' => ''
    ]);  ?>

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
