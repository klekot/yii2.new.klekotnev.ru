<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "idea".
 *
 * @property int $id
 * @property string $idea
 * @property string $description
 *
 * @property Word[] $words
 */
class Idea extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'idea';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idea'], 'required'],
            [['description'], 'string'],
            [['idea'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idea' => 'Idea',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWords()
    {
        return $this->hasMany(Word::className(), ['idea_id' => 'id']);
    }
}
