<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 10.02.2018
 * Time: 0:25
 */

namespace app\controllers;

use app\models\entities\Albums;

use app\repositories\AlbumsRepository;

class AlbumsController extends AppController
{

    protected $dataProvider;
    protected $sort;

    public function __construct($id, $module, AlbumsRepository $dataProvider, AlbumsRepository $sort , $config = [])
    {
        parent::__construct($id, $module);
        $this->dataProvider = $dataProvider;
        $this->sort = $sort;
    }

    public function actionIndex()
    {
        $dataProvider = $this->dataProvider->getDataProvider();
        $sort = $this->sort->getSort();
        $this->setMeta('Kizaru - Альбомы скачать',  'Все альбомы рэпера Kizaru на нашем сайте. Заходите и скачивайте альбомы Кизару.');
        return $this->render('index', compact('dataProvider', 'sort'));
    }

    public function actionView($alias)
    {
        $albums = Albums::find()->where(['alias' => $alias, 'status' => 1])->limit(1)->one();
        if(empty($albums)){
            throw new \yii\web\HttpException(404, 'Данной страницы не существует.');
        }
        $albums->viewedCounter();
        $this->setMeta( $albums->title_seo, $albums->description_seo);
        return $this->render('view', compact('albums'));
    }

}