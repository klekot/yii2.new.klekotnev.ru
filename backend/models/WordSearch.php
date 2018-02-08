<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Word;

/**
 * WordSearch represents the model behind the search form of `common\models\Word`.
 */
class WordSearch extends Word
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idea_id', 'language_id'], 'integer'],
            [['word', 'transcription', 'transcription_rus'], 'safe'],
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
        $query = Word::find();

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
            'idea_id' => $this->idea_id,
            'language_id' => $this->language_id,
        ]);

        $query->andFilterWhere(['like', 'word', $this->word])
            ->andFilterWhere(['like', 'transcription', $this->transcription])
            ->andFilterWhere(['like', 'transcription_rus', $this->transcription_rus]);

        return $dataProvider;
    }
}
