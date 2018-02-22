<?php


namespace app\controllers;

use app\models\entities\Home;

class HomeController extends AppController
{

    public $layout = 'mainSocial';

    public function actionIndex(){
        $content = Home::find()->asArray()->limit(1)->one();
        $this->setMeta($content['title_seo'], $content['description_seo']);
        return $this->render('index', compact('content'));
    }

}
