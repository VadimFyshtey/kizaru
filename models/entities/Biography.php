<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 10.02.2018
 * Time: 0:20
 */

namespace app\models\entities;

use yii\db\ActiveRecord;

class Biography extends ActiveRecord
{

    public static function tableName()
    {
        return 'biography';
    }

}