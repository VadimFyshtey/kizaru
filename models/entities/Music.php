<?php

namespace app\models\entities;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "music".
 *
 * @property int $id
 * @property string $name
 * @property string $album
 * @property string $file
 * @property int $status
 */
class Music extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'music';
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'name' => 'Название',
            'album' => 'Альбом',
            'file' => 'Песня',
            'status' => 'Статус',
        ];
    }
    public function getName()
    {
        return $this->album;

    }

    public static function getArrayList()
    {
        $parents = Music::find()->where(['status' => 1])->all();
        return ArrayHelper::map($parents, 'album', 'album');
    }
}
