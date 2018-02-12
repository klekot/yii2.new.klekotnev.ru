<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "text".
 *
 * @property int $id
 * @property int $content_file_id
 * @property string $creation_date
 *
 * @property Composition[] $compositions
 * @property File $contentFile
 * @property Person[] $authors
 */
class Text extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'text';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content_file_id'], 'required'],
            [['content_file_id'], 'integer'],
            [['creation_date'], 'safe'],
            [['content_file_id'], 'exist', 'skipOnError' => true, 'targetClass' => File::className(), 'targetAttribute' => ['content_file_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content_file_id' => 'Content File ID',
            'creation_date' => 'Creation Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompositions()
    {
        return $this->hasMany(Composition::className(), ['text_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContentFile()
    {
        return $this->hasOne(File::className(), ['id' => 'content_file_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthors()
    {
        return $this->hasMany(Person::className(), ['id' => 'author_id'])->viaTable('text_author', ['text_id' => 'id']);
    }
}
