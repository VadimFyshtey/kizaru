<?php

namespace app\controllers;

use app\models\entities\Video;
use yii\data\Pagination;

class VideoController extends AppController {

    const PAGE_SIZE = 6;

    public function actionIndex()
    {
        $query = Video::find()->where(['status' => 1])->orderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => self::PAGE_SIZE, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $video = $query->offset($pages->offset)->limit($pages->limit)->all();
        $this->setMeta('Kizaru - Видео | Клипы',  'Видео и клипы рэпера Kizaru у нас на сайте. Смотрите все самые интересные моменты из жизни Kizaru у нас.');
        return $this->render('index', compact('video', 'pages'));
    }

}
