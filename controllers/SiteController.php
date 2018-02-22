<?php

namespace app\controllers;

use app\models\entities\Comment;
use app\models\entities\Photo;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\form\LoginForm;
use yii\web\NotFoundHttpException;

class SiteController extends AppController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
{
    return [
        'access' => [
            'class' => AccessControl::className(),
            'only' => ['logout'],
            'rules' => [
                [
                    'actions' => ['logout'],
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ],
        ],
        'verbs' => [
            'class' => VerbFilter::className(),
            'actions' => [
                'logout' => ['get'],
            ],
        ],
    ];
}

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionCopyright()
    {
        $this->setMeta('Kizaru | Правообладателям',  'Кизару песни | Кизару тексты. На нашем сайте вы найдете биографию, тексты кизару и песни также многое другое. Можно скачать песни Кизару.');
        return $this->render('copyright');
    }


    public function actionBy88()
    {
        $this->setMeta('Kizaru | Информация о создателе сайта',  'Кизару песни | Кизару тексты. На нашем сайте вы найдете биографию, тексты кизару и песни также многое другое. Можно скачать песни Кизару.');
        return $this->render('by88');
    }


    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
    //remove comment
    public function actionRemove($id){
        $this->findComment($id)->delete();
        Comment::deleteAll(['parent_id' => $id]);
        Comment::deleteAll(['super_parent_id' => $id]);
        return $this->redirect(Yii::$app->request->referrer);
    }

    public function actionDestroy($id){
        $this->findPhoto($id)->delete();
        return $this->redirect(Yii::$app->request->referrer);
    }

    protected function findPhoto($id)
    {
        if (($model = Photo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    protected function findComment($id)
    {
        if (($model = Comment::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
