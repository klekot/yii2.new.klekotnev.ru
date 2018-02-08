<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MusicianRecord;

/**
 * MusicianRecordSearch represents the model behind the search form of `common\models\MusicianRecord`.
 */
class MusicianRecordSearch extends MusicianRecord
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'musician_id', 'record_id', 'instrument_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MusicianRecord::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'musician_id' => $this->musician_id,
            'record_id' => $this->record_id,
            'instrument_id' => $this->instrument_id,
        ]);

        return $dataProvider;
    }
}
