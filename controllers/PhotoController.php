<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 15.02.2018
 * Time: 20:12
 */

namespace app\controllers;

use app\models\entities\Photo;
use yii\data\Pagination;

class PhotoController extends AppController
{

    const PAGE_SIZE = 12;

    public function actionIndex()
    {
        $query = Photo::find()->where(['status' => 1])->orderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => self::PAGE_SIZE, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $photo = $query->offset($pages->offset)->limit($pages->limit)->all();
        $this->setMeta('Kizaru - Фото',  'Интересны моменты из жизни рэпера Kizaru, все фотографи Олега у нас на сайте.');
        return $this->render('index', compact('photo', 'pages'));
    }

}