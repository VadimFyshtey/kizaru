<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 10.02.2018
 * Time: 0:20
 */

namespace app\controllers;

use app\models\entities\Biography;

class BiographyController extends AppController
{

    public function actionIndex(){
        $biography = Biography::find()->asArray()->limit(1)->one();
        $this->setMeta($biography['title_seo'], $biography['description_seo']);
        return $this->render('index', compact('biography'));
    }

}