<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "collective".
 *
 * @property int $id
 * @property string $name
 * @property string $begin_date
 * @property string $end_date
 * @property string $creation_place
 *
 * @property Musician[] $musicians
 * @property Record[] $records
 */
class Collective extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'collective';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['begin_date', 'end_date'], 'safe'],
            [['name', 'creation_place'], 'string', 'max' => 255],
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
            'begin_date' => 'Begin Date',
            'end_date' => 'End Date',
            'creation_place' => 'Creation Place',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMusicians()
    {
        return $this->hasMany(Musician::className(), ['id' => 'musician_id'])->viaTable('collective_musician', ['collective_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecords()
    {
        return $this->hasMany(Record::className(), ['collective_id' => 'id']);
    }
}
