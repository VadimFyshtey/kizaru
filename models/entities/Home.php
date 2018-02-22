<?php

namespace app\models\entities;

use yii\db\ActiveRecord;

class Home extends ActiveRecord
{

    public static function tableName()
    {
        return 'home';
    }

}