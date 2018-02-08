<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "musician_record".
 *
 * @property int $id
 * @property int $musician_id
 * @property int $record_id
 * @property int $instrument_id
 *
 * @property Instrument $instrument
 * @property Musician $musician
 * @property Record $record
 */
class MusicianRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'musician_record';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['musician_id', 'record_id', 'instrument_id'], 'required'],
            [['musician_id', 'record_id', 'instrument_id'], 'integer'],
            [['instrument_id'], 'exist', 'skipOnError' => true, 'targetClass' => Instrument::className(), 'targetAttribute' => ['instrument_id' => 'id']],
            [['musician_id'], 'exist', 'skipOnError' => true, 'targetClass' => Musician::className(), 'targetAttribute' => ['musician_id' => 'id']],
            [['record_id'], 'exist', 'skipOnError' => true, 'targetClass' => Record::className(), 'targetAttribute' => ['record_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'musician_id' => 'Musician ID',
            'record_id' => 'Record ID',
            'instrument_id' => 'Instrument ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstrument()
    {
        return $this->hasOne(Instrument::className(), ['id' => 'instrument_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMusician()
    {
        return $this->hasOne(Musician::className(), ['id' => 'musician_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecord()
    {
        return $this->hasOne(Record::className(), ['id' => 'record_id']);
    }
}
