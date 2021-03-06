<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 15.02.2018
 * Time: 19:20
 */

namespace app\repositories;

use app\models\entities\Interview;
use yii\data\ActiveDataProvider;
use yii\data\Sort;

class InterviewRepository
{
    const PAGE_SIZE = 5;

    public function getDataProvider()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Interview::find()->where(['status' => 1]),
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