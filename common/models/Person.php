<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property int $id
 * @property string $lastname
 * @property string $firstname
 * @property int $is_author
 * @property int $is_musician
 *
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lastname', 'firstname'], 'required'],
            [['lastname', 'firstname'], 'string', 'max' => 255],
            [['is_author', 'is_musician'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lastname' => 'Lastname',
            'firstname' => 'Firstname',
            'is_author' => 'Is author?',
            'is_musician' => 'Is musician?'
        ];
    }
}
