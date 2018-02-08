<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "music".
 *
 * @property int $id
 * @property int $notation_file_id
 * @property string $creation_date
 *
 * @property Composition[] $compositions
 * @property File $notationFile
 * @property Author[] $authors
 */
class Music extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'music';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['notation_file_id'], 'required'],
            [['notation_file_id'], 'integer'],
            [['creation_date'], 'safe'],
            [['notation_file_id'], 'exist', 'skipOnError' => true, 'targetClass' => File::className(), 'targetAttribute' => ['notation_file_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'notation_file_id' => 'Notation File ID',
            'creation_date' => 'Creation Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompositions()
    {
        return $this->hasMany(Composition::className(), ['music_id' => 'id']);
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
    public function getAuthors()
    {
        return $this->hasMany(Author::className(), ['id' => 'author_id'])->viaTable('music_author', ['music_id' => 'id']);
    }
}
