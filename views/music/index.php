<?php

use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\entities\Music;
/* @var $this yii\web\View */
/* @var $searchModel app\models\entities\MusicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


?>
<div class="music-index">

    <h2>Kizaru слушать песни онлайн</h2>

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
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>"\n{items}\n{pager}",
        'tableOptions' => ['class' => 'bordered bordered1'],
        'columns' => [
            [
                'attribute'=>'name',
                'contentOptions' =>function ($model, $key, $index, $column){
                    return ['data-title' => $model->name, 'class' => 'bordered1_block_display_none'];
                },
            ],
            [
                'attribute'=>'file',
                'content'=>function($data){
                    return "<audio src='/musics/$data->file' controls></audio>";
                },
                'contentOptions' =>function ($model, $key, $index, $column){
                    return ['data-title' => $model->name];
                },
            ],
            [
                'attribute'=>'album',
                'format'=>'text',
                'content'=>function($data){
                    return $data->getName();
                },
                'contentOptions' =>function ($model, $key, $index, $column){
                    return ['class' => 'bordered1_block_display_none'];
                },
                'filter' => Music::getArrayList()
            ],

        ],
    ]); ?>

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

</div>
