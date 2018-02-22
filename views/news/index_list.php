<?php
use yii\helpers\Html;
use yii\helpers\Url;
$mainImage = $model->getImage();
?>

<div class="clearfix"></div>
<?= Html::img("@web/images/upload/store/{$mainImage->filePath}", ['alt' => $model->name, 'class' => 'article_image' , 'title' => $model->name])?>
<h6><span class="hidden-xs"><?= $model->date . " | " ?></span><i class="glyphicon glyphicon-eye-open"></i> Просмотры: <?= $model->view ?></h6>
<h3><a href="<?= Url::to(['news/view', 'alias' => $model->alias]) ?>"><?= $model->name ?></a></h3>
<h4><?= mb_strimwidth($model->short_content, 0, 235, "...") ?></h4>
<p><a href="<?= Url::to(['news/view', 'alias' => $model->alias]) ?>">Читать далее...</a></p>
<div class="clearfix"></div>
<hr class="hidden-sm hidden-md hidden-lg"/>

