<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "musician".
 *
 * @property int $id
 * @property int $person_id
 *
 * @property Collective[] $collectives
 * @property Person $person
 * @property MusicianRecord[] $musicianRecords
 */
class Musician extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'musician';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['person_id'], 'required'],
            [['person_id'], 'integer'],
            [['person_id'], 'exist', 'skipOnError' => true, 'targetClass' => Person::className(), 'targetAttribute' => ['person_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'person_id' => 'Person ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCollectives()
    {
        return $this->hasMany(Collective::className(), ['id' => 'collective_id'])->viaTable('collective_musician', ['musician_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerson()
    {
        return $this->hasOne(Person::className(), ['id' => 'person_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMusicianRecords()
    {
        return $this->hasMany(MusicianRecord::className(), ['musician_id' => 'id']);
    }
}
