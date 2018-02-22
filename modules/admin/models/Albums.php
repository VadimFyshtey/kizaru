<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "albums".
 *
 * @property int $id
 * @property string $name
 * @property string $short_content
 * @property string $content
 * @property string $date
 * @property int $status
 * @property int $view
 * @property string $alias
 * @property string $title_seo
 * @property string $description_seo
 */
class Albums extends \yii\db\ActiveRecord
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
        return 'albums';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'short_content', 'content', 'date', 'alias'], 'required'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['status', 'view'], 'integer'],
            [['name', 'short_content'], 'string', 'max' => 255],
            [['alias'], 'string', 'max' => 100],
            [['title_seo'], 'string', 'max' => 70],
            [['description_seo'], 'string', 'max' => 160],
            [['alias'], 'unique'],
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
            'name' => 'Название',
            'short_content' => 'Короткое описание',
            'content' => 'Полное описание',
            'date' => 'Дата',
            'status' => 'Статус',
            'view' => 'Просмотры',
            'alias' => 'Url',
            'image' => 'Изображение',
            'title_seo' => 'Title(SEO)',
            'description_seo' => 'Description(SEO)',
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
