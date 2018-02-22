<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "biography".
 *
 * @property int $id
 * @property string $content
 * @property string $title_seo
 * @property string $description_seo
 */
class Biography extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'biography';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'required'],
            [['content'], 'string'],
            [['title_seo'], 'string', 'max' => 70],
            [['description_seo'], 'string', 'max' => 160],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'content' => 'Контент',
            'title_seo' => 'Title(SEO)',
            'description_seo' => 'Description(SEO)',
        ];
    }
}
