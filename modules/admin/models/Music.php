<?php

namespace app\modules\admin\models;

use Yii;

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
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['album'], 'string', 'max' => 100],
            [['file'], 'file', 'extensions' => 'mp3'],
        ];
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
            'file' => 'Файл',
            'status' => 'Статус',
        ];
    }
}
