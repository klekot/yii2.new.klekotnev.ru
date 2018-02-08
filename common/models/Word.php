<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "word".
 *
 * @property int $id
 * @property string $word
 * @property int $idea_id
 * @property int $language_id
 * @property string $transcription
 * @property string $transcription_rus
 *
 * @property Idea $idea
 * @property Language $language
 */
class Word extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'word';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['word', 'idea_id', 'language_id'], 'required'],
            [['idea_id', 'language_id'], 'integer'],
            [['word', 'transcription', 'transcription_rus'], 'string', 'max' => 255],
            [['idea_id'], 'exist', 'skipOnError' => true, 'targetClass' => Idea::className(), 'targetAttribute' => ['idea_id' => 'id']],
            [['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'word' => 'Word',
            'idea_id' => 'Idea ID',
            'language_id' => 'Language ID',
            'transcription' => 'Transcription',
            'transcription_rus' => 'Transcription Rus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdea()
    {
        return $this->hasOne(Idea::className(), ['id' => 'idea_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::className(), ['id' => 'language_id']);
    }
}
