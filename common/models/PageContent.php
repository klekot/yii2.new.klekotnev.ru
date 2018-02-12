<?php

namespace common\models;

use Yii;
use \borales\behaviors\elasticsearch\Behavior;

/**
 * This is the model class for table "page_content".
 *
 * @property int $id
 * @property string $path
 * @property string $content
 */
class PageContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['path'], 'required'],
            [['content'], 'string'],
            [['path'], 'string', 'max' => 255],
            [['path'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'path' => 'Path',
            'content' => 'Content',
        ];
    }

    public function behaviors()
    {
        return [
            'elasticsearch' => [
                'class' => Behavior::className(),
                'mode' => 'command',
                'elasticIndex' => 'klekotnev',
                'elasticType' => 'page_content',
                'dataMap' => [
                    'content' => function() {
                        return strip_tags($this->content);
                    },
                ]
            ],
        ];
    }
}
