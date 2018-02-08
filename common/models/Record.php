<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "record".
 *
 * @property int $id
 * @property int $composition_id
 * @property int $album_id
 * @property int $collective_id
 * @property string $creation_date
 * @property int $record_type_id
 * @property int $duration
 * @property int $file_id
 * @property string $format
 * @property string $sample_rate
 * @property string $bit_depth
 *
 * @property MusicianRecord[] $musicianRecords
 * @property Album $album
 * @property Collective $collective
 * @property Composition $composition
 * @property File $file
 * @property RecordType $recordType
 */
class Record extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'record';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['composition_id', 'album_id', 'collective_id', 'record_type_id'], 'required'],
            [['composition_id', 'album_id', 'collective_id', 'record_type_id', 'duration', 'file_id'], 'integer'],
            [['creation_date'], 'safe'],
            [['format', 'sample_rate', 'bit_depth'], 'string', 'max' => 255],
            [['album_id'], 'exist', 'skipOnError' => true, 'targetClass' => Album::className(), 'targetAttribute' => ['album_id' => 'id']],
            [['collective_id'], 'exist', 'skipOnError' => true, 'targetClass' => Collective::className(), 'targetAttribute' => ['collective_id' => 'id']],
            [['composition_id'], 'exist', 'skipOnError' => true, 'targetClass' => Composition::className(), 'targetAttribute' => ['composition_id' => 'id']],
            [['file_id'], 'exist', 'skipOnError' => true, 'targetClass' => File::className(), 'targetAttribute' => ['file_id' => 'id']],
            [['record_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => RecordType::className(), 'targetAttribute' => ['record_type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'composition_id' => 'Composition ID',
            'album_id' => 'Album ID',
            'collective_id' => 'Collective ID',
            'creation_date' => 'Creation Date',
            'record_type_id' => 'Record Type ID',
            'duration' => 'Duration',
            'file_id' => 'File ID',
            'format' => 'Format',
            'sample_rate' => 'Sample Rate',
            'bit_depth' => 'Bit Depth',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMusicianRecords()
    {
        return $this->hasMany(MusicianRecord::className(), ['record_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlbum()
    {
        return $this->hasOne(Album::className(), ['id' => 'album_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollective()
    {
        return $this->hasOne(Collective::className(), ['id' => 'collective_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComposition()
    {
        return $this->hasOne(Composition::className(), ['id' => 'composition_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFile()
    {
        return $this->hasOne(File::className(), ['id' => 'file_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecordType()
    {
        return $this->hasOne(RecordType::className(), ['id' => 'record_type_id']);
    }
}
