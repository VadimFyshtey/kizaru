<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 10.02.2018
 * Time: 0:25
 */

namespace app\controllers;

use app\models\entities\Interview;
use app\repositories\InterviewRepository;

class InterviewController extends AppController
{

    protected $dataProvider;
    protected $sort;

    public function __construct($id, $module, InterviewRepository $dataProvider, InterviewRepository $sort , $config = [])
    {
        parent::__construct($id, $module);
        $this->dataProvider = $dataProvider;
        $this->sort = $sort;
    }

    public function actionIndex()
    {
        $dataProvider = $this->dataProvider->getDataProvider();
        $sort = $this->sort->getSort();
        $this->setMeta('Kizaru - Интервью',  'Интересные интервью рэпера Kizaru у нас на сайте. Заходите читайте у нас много информации о Кизару.');
        return $this->render('index', compact( 'dataProvider', 'sort'));
    }

    public function actionView($alias)
    {
        $interview = Interview::find()->where(['alias' => $alias, 'status' => 1])->limit(1)->one();
        if(empty($interview)){
            throw new \yii\web\HttpException(404, 'Данной страницы не существует.');
        }
        $interview->viewedCounter();
        $this->setMeta( $interview->title_seo, $interview->description_seo);
        return $this->render('view', compact('interview'));
    }

}