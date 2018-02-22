<?php

namespace app\models\entities;

use yii\db\ActiveRecord;

class Comment extends ActiveRecord
{

    public static function tableName()
    {
        return 'comment';
    }

}