<?php
use yii\helpers\Url;
use yii\helpers\Html;
$mainImage = $album->getImage();
?>
<div>
    <center>
        <?= Html::img("@web/images/upload/store/{$mainImage->filePath}", ['alt' => $album->name , 'title' => $album->name])?>
        <a href="<?= Url::to(['albums/view', 'alias' => $album->alias]) ?>">
            <?= mb_strimwidth($album->name, 0, 50, "...") ?>
        </a>
    </center>
</div>
