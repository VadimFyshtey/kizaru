<?php

namespace app\components;

use app\models\entities\Texts;
use yii\base\Widget;
use Yii;

class TextPopulWidget extends Widget{

    public $tpl;
    public $data;
    public $html;


    public function init() {
        parent::init();
        if($this->tpl === null){
            $this->tpl = 'textPopul';
        }
        $this->tpl .= '.php';
    }

    public function run() {
        if($this->tpl == 'textPopul.php'){
            $text = Yii::$app->cache->get('textPopul');
            if($text) return $text;
        }

        $this->data = Texts::find()->where(['status' => 1])->orderBy('RAND()')->limit(6)->all();
        $this->html = $this->getMenuHtml($this->data);
        if($this->tpl == 'textPopul.php'){
            Yii::$app->cache->set('textPopul', $this->html, 3600 * 12);
        }
        return $this->html;
    }

    protected function getMenuHtml($data){
        $str = '';
        foreach ($data as $text){
            $str .= $this->catToTemplate($text);
        }
        return $str;
    }

    protected function catToTemplate($text){
        ob_start();
        include __DIR__ . '/tpl/' . $this->tpl;
        return ob_get_clean();
    }

}