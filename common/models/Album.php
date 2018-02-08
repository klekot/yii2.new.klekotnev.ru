<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "album".
 *
 * @property int $id
 * @property string $name
 * @property string $creation_date
 * @property int $cover_file_id
 *
 * @property File $coverFile
 * @property Record[] $records
 */
class Album extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'album';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['creation_date'], 'safe'],
            [['cover_file_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['cover_file_id'], 'exist', 'skipOnError' => true, 'targetClass' => File::className(), 'targetAttribute' => ['cover_file_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'creation_date' => 'Creation Date',
            'cover_file_id' => 'Cover File ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoverFile()
    {
        return $this->hasOne(File::className(), ['id' => 'cover_file_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecords()
    {
        return $this->hasMany(Record::className(), ['album_id' => 'id']);
    }
}
