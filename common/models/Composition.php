<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "composition".
 *
 * @property int $id
 * @property int $music_id
 * @property int $text_id
 * @property string $name
 * @property string $creation_date
 * @property int $notation_file_id
 *
 * @property Music $music
 * @property File $notationFile
 * @property Text $text
 * @property Record[] $records
 */
class Composition extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'composition';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['music_id', 'text_id', 'name'], 'required'],
            [['music_id', 'text_id', 'notation_file_id'], 'integer'],
            [['creation_date'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['music_id'], 'exist', 'skipOnError' => true, 'targetClass' => Music::className(), 'targetAttribute' => ['music_id' => 'id']],
            [['notation_file_id'], 'exist', 'skipOnError' => true, 'targetClass' => File::className(), 'targetAttribute' => ['notation_file_id' => 'id']],
            [['text_id'], 'exist', 'skipOnError' => true, 'targetClass' => Text::className(), 'targetAttribute' => ['text_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'music_id' => 'Music ID',
            'text_id' => 'Text ID',
            'name' => 'Name',
            'creation_date' => 'Creation Date',
            'notation_file_id' => 'Notation File ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMusic()
    {
        return $this->hasOne(Music::className(), ['id' => 'music_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotationFile()
    {
        return $this->hasOne(File::className(), ['id' => 'notation_file_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getText()
    {
        return $this->hasOne(Text::className(), ['id' => 'text_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecords()
    {
        return $this->hasMany(Record::className(), ['composition_id' => 'id']);
    }
}
