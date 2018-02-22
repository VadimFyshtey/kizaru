<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $id
 * @property string $model
 * @property int $model_id
 * @property int $user_id
 * @property string $username
 * @property string $email
 * @property int $parent_id null-is not a reply, int-replied comment id
 * @property string $content
 * @property int $status 0-pending,1-published,2-spam,3-deleted
 * @property int $created_at
 * @property int $updated_at
 * @property int $updated_by
 * @property string $user_ip
 * @property int $super_parent_id null-has no parent, int-1st level parent id
 * @property string $url
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model_id', 'user_id', 'parent_id', 'status', 'created_at', 'updated_at', 'updated_by', 'super_parent_id'], 'integer'],
            [['content'], 'string'],
            [['created_at', 'updated_at'], 'required'],
            [['model'], 'string', 'max' => 64],
            [['username', 'email'], 'string', 'max' => 128],
            [['user_ip'], 'string', 'max' => 15],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'model' => 'Модель',
            'model_id' => 'Id модели',
            'user_id' => 'Id пользователя',
            'username' => 'Пользователь',
            'email' => 'Email',
            'parent_id' => 'Id родителя',
            'content' => 'Контент',
            'status' => 'Статус',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'user_ip' => 'Ip Пользователя',
            'super_parent_id' => 'Id первого родителя',
            'url' => 'Url',
        ];
    }
}
