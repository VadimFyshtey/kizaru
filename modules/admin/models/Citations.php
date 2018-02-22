<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "citations".
 *
 * @property int $id
 * @property string $content
 * @property string $music
 * @property int $status
 */
class Citations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'citations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'required'],
            [['status'], 'integer'],
            [['content'], 'string', 'max' => 160],
            [['music'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'content' => 'Цитата',
            'music' => 'Песня',
            'status' => 'Статус',
        ];
    }
}
