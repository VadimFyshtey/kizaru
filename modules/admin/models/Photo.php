<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "photo".
 *
 * @property int $id
 * @property int $status
 */
class Photo extends \yii\db\ActiveRecord
{

    public $image;

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['image'], 'file', 'extensions' => 'png,jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'status' => 'Статус',
            'image' => 'Фото'
        ];
    }


    public function upload(){
        if($this->validate()){
            $path = 'images/upload/store/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path, true);
            @unlink($path);
            return true;
        }else{
            return false;
        }
    }
}
