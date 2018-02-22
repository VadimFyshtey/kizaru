<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 15.02.2018
 * Time: 22:54
 */

namespace app\repositories;

use app\modules\admin\models\Music;
use yii\data\ActiveDataProvider;
use yii\data\Sort;

class MusicRepository
{

    const PAGE_SIZE = 5;

    public function getDataProvider()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Music::find()->where(['status' => 1]),
            'sort'=> ['defaultOrder' => ['id' => 'DESC']],
            'pagination' => [
                'pageSize' => self::PAGE_SIZE,
                'forcePageParam' => false,
                'pageSizeParam' => false
            ],
        ]);

        return $dataProvider;
    }

    public function getSort(){

        $sort = new Sort([
            'attributes' => [
                'date' => [
                    'asc' => ['name' => SORT_ASC],
                    'desc' => ['name' => SORT_DESC],
                    'default' => SORT_DESC,
                    'label' => 'Названию',
                ],
            ],
        ]);

        return $sort;
    }

}