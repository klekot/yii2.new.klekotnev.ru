<?php

namespace app\models;

use app\models\PageContent;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\elasticsearch\Query;
use yii\elasticsearch\QueryBuilder;

/**

 * ArticlesSearch represents the model behind the search form about `app\models\Articles`.

 */

class Search extends Elastic
{
    public function searches($value)
    {
        $searches = $value['search'];
        $query = new Query();
        $db = Elastic::getDb();
        $queryBuilder = new QueryBuilder($db);
        $match = ['match' => ['content' => $searches]];
        $query->query = $match;
        $build = $queryBuilder->build($query);
        $res = $query->search($db, $build);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 10],
        ]);

        return $dataProvider;
    }
}