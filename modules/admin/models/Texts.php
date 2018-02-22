<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "texts".
 *
 * @property int $id
 * @property string $name
 * @property string $content
 * @property string $album
 * @property int $view
 * @property int $status
 * @property string $alias
 * @property string $title_seo
 * @property string $description_seo
 */
class Texts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'texts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'content', 'alias'], 'required'],
            [['content'], 'string'],
            [['view', 'status'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['album', 'alias'], 'string', 'max' => 100],
            [['description_seo'], 'string', 'max' => 160],
            [['title_seo'], 'string', 'max' => 70],
            [['alias'], 'unique'],
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
            'content' => 'Контент',
            'album' => 'Альбом',
            'view' => 'Просмотры',
            'status' => 'Статус',
            'alias' => 'Url',
            'title_seo' => 'Title(SEO)',
            'description_seo' => 'Description(SEO',
        ];
    }
}
