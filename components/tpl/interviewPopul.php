<?php
use yii\helpers\Url;
use yii\helpers\Html;
$mainImage = $interview->getImage();
?>
<div>
    <center>
        <?= Html::img("@web/images/upload/store/{$mainImage->filePath}", ['alt' => $interview->name , 'title' => $interview->name])?>
        <a href="<?= Url::to(['interview/view', 'alias' => $interview->alias]) ?>">
            <?= mb_strimwidth($interview->name, 0, 50, "...") ?>
        </a>
    </center>
</div>
