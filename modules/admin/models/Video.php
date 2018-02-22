<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property int $id
 * @property string $name
 * @property int $status
 * @property string $url
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'url'], 'required'],
            [['status'], 'integer'],
            [['name', 'url'], 'string', 'max' => 255],
            [['url'], 'unique'],
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
            'status' => 'Статус',
            'url' => 'Url',
        ];
    }
}
