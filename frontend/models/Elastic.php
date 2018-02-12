<?php

namespace frontend\models;

use yii\elasticsearch\ActiveRecord;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\elasticsearch\Query;
use yii\elasticsearch\QueryBuilder;

class Elastic extends ActiveRecord
{
    public static function index()
    {
        return 'klekotnev';
    }
    public static function type()
    {
        return 'page_content';
    }

    /**
     * @return array the list of attributes for this record
     */
    public function attributes()
    {
        // path mapping for '_id' is setup to field 'id'
        return ['id', 'path', 'content'];
    }

    public function searches($value)
    {
        $searches = $value['search'];
        $query = new Query();
        $db = Elastic::getDb();
        $queryBuilder = new QueryBuilder($db);
        $match = ['match' => ['content' => $searches]];
        $query->query = $match;
        $build = $queryBuilder->build($query);
//        $res = $query->search($db, $build);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 10],
        ]);

        return $dataProvider;
    }
}