<?php
use yii\helpers\Url;
use yii\helpers\Html;
$mainImage = $news->getImage();
?>
<div>
    <center>
        <?= Html::img("@web/images/upload/store/{$mainImage->filePath}", ['alt' => $news->name , 'title' => $news->name])?>
    <a href="<?= Url::to(['news/view', 'alias' => $news->alias]) ?>">
        <?= mb_strimwidth($news->name, 0, 50, "...") ?>
    </a>
    </center>
</div>
