<?php

namespace app\components;

use yii\base\Widget;
use app\models\entities\News;
use Yii;

class NewsPopulWidget extends Widget{

    public $tpl;
    public $data;
    public $html;


    public function init() {
        parent::init();
        if($this->tpl === null){
            $this->tpl = 'newsPopul';
        }
        $this->tpl .= '.php';
    }

    public function run() {
        if($this->tpl == 'newsPopul.php'){
           $news = Yii::$app->cache->get('newsPopul');
           if($news) return $news;
        }

        $this->data = News::find()->where(['status' => 1])->orderBy('RAND()')->limit(6)->all();
        $this->html = $this->getMenuHtml($this->data);
        if($this->tpl == 'newsPopul.php'){
            Yii::$app->cache->set('newsPopul', $this->html, 3600 * 12);
        }
        return $this->html;
    }

    protected function getMenuHtml($data){
        $str = '';
        foreach ($data as $news){
            $str .= $this->catToTemplate($news);
        }
        return $str;
    }

    protected function catToTemplate($news){
        ob_start();
        include __DIR__ . '/tpl/' . $this->tpl;
        return ob_get_clean();
    }

}