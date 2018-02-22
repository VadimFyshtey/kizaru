<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 08.02.2018
 * Time: 20:35
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    protected function setMeta($title = null, $description = null){
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
    }
}