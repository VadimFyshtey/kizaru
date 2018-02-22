<?php

namespace app\models\entities;

use yii\db\ActiveRecord;

class Texts extends ActiveRecord
{

    public function behaviors()
    {
        return [
            'comments' => [
                'class' => 'yeesoft\comments\behaviors\CommentsBehavior'
            ]
        ];
    }

    public static function tableName()
    {
        return 'texts';
    }

    public function viewedCounter(){

        if($this->view >= 99999){
            return $this->view = 99999 . '+';
        }
        $this->view += 1;
        return $this->save();
    }

}