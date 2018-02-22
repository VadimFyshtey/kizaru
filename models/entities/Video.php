<?php

namespace app\models\entities;

use yii\db\ActiveRecord;

class Video extends ActiveRecord
{

    public static function tableName()
    {
        return 'video';
    }

}