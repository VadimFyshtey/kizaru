<?php

namespace app\components;

use app\models\entities\Interview;
use yii\base\Widget;
use Yii;

class InterviewPopulWidget extends Widget{

    public $tpl;
    public $data;
    public $html;

    public function init() {
        parent::init();
        if($this->tpl === null){
            $this->tpl = 'interviewPopul';
        }
        $this->tpl .= '.php';
    }

    public function run() {
        if($this->tpl == 'interviewPopul.php'){
           $interview = Yii::$app->cache->get('interview');
           if($interview) return $interview;
        }

        $this->data = Interview::find()->where(['status' => 1])->orderBy('RAND()')->limit(6)->all();
        $this->html = $this->getMenuHtml($this->data);
        if($this->tpl == 'interviewPopul.php'){
            Yii::$app->cache->set('interview', $this->html, 3600 * 12);
        }
        return $this->html;
    }

    protected function getMenuHtml($data){
        $str = '';
        foreach ($data as $interview){
            $str .= $this->catToTemplate($interview);
        }
        return $str;
    }

    protected function catToTemplate($interview){
        ob_start();
        include __DIR__ . '/tpl/' . $this->tpl;
        return ob_get_clean();
    }

}