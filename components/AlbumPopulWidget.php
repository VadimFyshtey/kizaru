<?php

namespace app\components;

use app\models\entities\Albums;
use yii\base\Widget;
use Yii;

class AlbumPopulWidget extends Widget{

    public $tpl;
    public $data;
    public $html;


    public function init() {
        parent::init();
        if($this->tpl === null){
            $this->tpl = 'albumPopul';
        }
        $this->tpl .= '.php';
    }

    public function run() {
        if($this->tpl == 'albumPopul.php'){
           $album = Yii::$app->cache->get('album');
           if($album) return $album;
        }

        $this->data = Albums::find()->where(['status' => 1])->orderBy('RAND()')->limit(6)->all();
        $this->html = $this->getMenuHtml($this->data);
        if($this->tpl == 'albumPopul.php'){
            Yii::$app->cache->set('album', $this->html, 3600 * 12);
        }
        return $this->html;
    }

    protected function getMenuHtml($data){
        $str = '';
        foreach ($data as $album){
            $str .= $this->catToTemplate($album);
        }
        return $str;
    }

    protected function catToTemplate($album){
        ob_start();
        include __DIR__ . '/tpl/' . $this->tpl;
        return ob_get_clean();
    }

}