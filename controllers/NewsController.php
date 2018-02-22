<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 10.02.2018
 * Time: 0:25
 */

namespace app\controllers;

use app\models\entities\News;
use app\repositories\NewsRepository;

class NewsController extends AppController
{

    protected $dataProvider;
    protected $sort;

    public function __construct($id, $module, NewsRepository $dataProvider, NewsRepository $sort , $config = [])
    {
        parent::__construct($id, $module);
        $this->dataProvider = $dataProvider;
        $this->sort = $sort;
    }

    public function actionIndex()
    {
        $dataProvider = $this->dataProvider->getDataProvider();
        $sort = $this->sort->getSort();
        $this->setMeta('Kizaru - Новости',  'Новости о рэпере Kizaru, интересные события из жизни рэпера, интриги, скандалы, все о Kizaru.');
        return $this->render('index', compact('dataProvider', 'sort'));
    }

    public function actionView($alias)
    {
        $news = News::find()->where(['alias' => $alias, 'status' => 1])->limit(1)->one();
        if(empty($news)){
            throw new \yii\web\HttpException(404, 'Данной страницы не существует.');
        }
        $news->viewedCounter();
        $this->setMeta( $news->title_seo, $news->description_seo);
        return $this->render('view', compact('news'));
    }

}