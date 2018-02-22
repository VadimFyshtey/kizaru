<?php

namespace app\controllers;

use app\models\entities\Texts;
use yii\data\Pagination;

class TextsController extends AppController {

    const PAGE_SIZE = 10;

    public function actionIndex(){
        $query = Texts::find()->where(['status' => 1])->orderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => self::PAGE_SIZE, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $texts = $query->offset($pages->offset)->limit($pages->limit)->all();
        $this->setMeta('Kizaru - Тексты песен',  'Все тексты песен рэпера Kizaru у нас на сайтею. Так же перевод песен Kizaru.');
        return $this->render('index', compact('texts', 'pages'));
    }

     public function actionView($alias)
     {
        $texts = Texts::find()->where(['alias' => $alias, 'status' => 1])->limit(1)->one();
        if(empty($texts)){
            throw new \yii\web\HttpException(404, 'Данной страницы не существует.');
        }
        $texts->viewedCounter();
        $this->setMeta( $texts->title_seo, $texts->description_seo);
        return $this->render('view', compact('texts'));
    }

}
