<?php

namespace app\controllers;

use Yii;
use app\models\entities\Music;
use app\models\entities\MusicSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MusicController implements the CRUD actions for Music model.
 */
class MusicController extends AppController
{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new MusicSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $this->setMeta('Kizaru - Все песни',  'Все песни рэпера Kizaru слушайте онлайн, или же скачивайте песни Kizaru себе.');
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}
