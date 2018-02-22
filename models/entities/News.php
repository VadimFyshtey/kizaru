<?php

namespace app\models\entities;

use yii\db\ActiveRecord;

class News extends ActiveRecord
{

    public function behaviors()
    {
        return [
            'comments' => [
                'class' => 'yeesoft\comments\behaviors\CommentsBehavior'
            ],
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName()
    {
        return 'news';
    }

    public function viewedCounter(){

        if($this->view >= 99999){
            return $this->view = 99999 . '+';
        }
        $this->view += 1;
        return $this->save();
    }

}