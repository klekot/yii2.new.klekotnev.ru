<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Record;

/**
 * RecordSearch represents the model behind the search form of `common\models\Record`.
 */
class RecordSearch extends Record
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'composition_id', 'album_id', 'collective_id', 'record_type_id', 'duration', 'file_id'], 'integer'],
            [['creation_date', 'format', 'sample_rate', 'bit_depth'], 'safe'],
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
        $query = Record::find();

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
            'composition_id' => $this->composition_id,
            'album_id' => $this->album_id,
            'collective_id' => $this->collective_id,
            'creation_date' => $this->creation_date,
            'record_type_id' => $this->record_type_id,
            'duration' => $this->duration,
            'file_id' => $this->file_id,
        ]);

        $query->andFilterWhere(['like', 'format', $this->format])
            ->andFilterWhere(['like', 'sample_rate', $this->sample_rate])
            ->andFilterWhere(['like', 'bit_depth', $this->bit_depth]);

        return $dataProvider;
    }
}
