<?php

namespace app\components;

use app\models\entities\Citations;
use yii\base\Widget;
use Yii;

class CitationsWidget extends Widget{

    public $tpl;
    public $data;
    public $html;


    public function init() {
        parent::init();
        if($this->tpl === null){
            $this->tpl = 'citations';
        }
        $this->tpl .= '.php';
    }

    public function run() {
        if($this->tpl == 'citations.php'){
           $citations = Yii::$app->cache->get('citations');
           if($citations) return $citations;
        }

        $this->data = Citations::find()->where(['status' => 1])->orderBy('RAND()')->asArray()->all();
        $this->html = $this->getMenuHtml($this->data);
        if($this->tpl == 'citations.php'){
            Yii::$app->cache->set('citations', $this->html, 3600 * 12);
        }
        return $this->html;
    }

    protected function getMenuHtml($data){
        $str = '';
        foreach ($data as $citations){
            $str .= $this->catToTemplate($citations);
        }
        return $str;
    }

    protected function catToTemplate($citations){
        ob_start();
        include __DIR__ . '/tpl/' . $this->tpl;
        return ob_get_clean();
    }

}