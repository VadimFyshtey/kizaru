<?php

namespace app\models\entities;

use yii\db\ActiveRecord;

class Citations extends ActiveRecord
{

    public static function tableName()
    {
        return 'citations';
    }

}