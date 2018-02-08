<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "instrument".
 *
 * @property int $id
 * @property string $name
 *
 * @property MusicianRecord[] $musicianRecords
 */
class Instrument extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'instrument';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMusicianRecords()
    {
        return $this->hasMany(MusicianRecord::className(), ['instrument_id' => 'id']);
    }
}
