<?php
use yii\helpers\Html;
use yii\helpers\Url;
$mainImage = $news->getImage();
?>

<div class="clearfix"></div>
<?= Html::img("@web/images/upload/store/{$mainImage->filePath}", ['alt' => $news->name, 'class' => 'last_news_img' , 'title' => $news->name])?>
<a href="<?= Url::to(['news/view', 'alias' => $news->alias]) ?>">
    <?= mb_strimwidth($news->name, 0, 50, "...") ?>
</a>
<p><?= mb_strimwidth($news->short_content, 0, 105, "...") ?></p>
<div class="clearfix"></div>
