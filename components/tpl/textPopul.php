<?php
use yii\helpers\Url;
?>
<li>
    <a href="<?= Url::to(['texts/view', 'alias' => $text->alias]) ?>">
        <?= mb_strimwidth('Kizaru - ' . $text->name, 0, 70, "...") ?>
    </a>
</li>

