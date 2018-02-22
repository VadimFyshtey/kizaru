<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 15.02.2018
 * Time: 19:26
 */

namespace app\repositories;

use app\models\entities\News;
use yii\data\ActiveDataProvider;
use yii\data\Sort;

class NewsRepository
{
    const PAGE_SIZE = 5;

    public function getDataProvider()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => News::find()->where(['status' => 1]),
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
                    'asc' => ['date' => SORT_ASC],
                    'desc' => ['date' => SORT_DESC],
                    'default' => SORT_DESC,
                    'label' => 'Дате',
                ],
                'view' => [
                    'asc' => ['view' => SORT_ASC],
                    'desc' => ['view' => SORT_DESC],
                    'default' => SORT_DESC,
                    'label' => 'Просмотрам',
                ],
            ],
        ]);

        return $sort;
    }
}