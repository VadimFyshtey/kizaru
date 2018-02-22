<?php

namespace app\models\entities;

use yii\db\ActiveRecord;

class Photo extends ActiveRecord
{

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName()
    {
        return 'photo';
    }


}