<?php

namespace app\models;

use Yii;

class Elastic extends \yii\elasticsearch\ActiveRecord
{
    public static function index() {
        return 'new_klekotnev_ru';
    }

    public static function type() {
        return 'pages';
    }

    public function attributes()
    {
        return['path', 'content'];
    }

    public function rules()
    {
        return [
            ['content', 'required']
        ];
    }

    /**
     * @return array This model's mapping
     */
    public static function mapping()
    {
        return [
            static::type() => [
                'properties' => [
                    'id'      => ['type' => 'long'],
                    'path'    => ['type' => 'string'],
                    'content' => ['type' => 'string'],
                ]
            ],
        ];
    }

    /**
     * Set (update) mappings for this model
     */
    public static function updateMapping()
    {
        $db = static::getDb();
        $command = $db->createCommand();
        $command->setMapping(static::index(), static::type(), static::mapping());
    }

    /**
     * Create this model's index
     */
    public static function createIndex()
    {
        $db = static::getDb();
        $command = $db->createCommand();
        $command->createIndex(static::index(), [
            'settings' => [ 'index' => ['refresh_interval' => '1s'] ],
            'mappings' => static::mapping(),
            //'warmers' => [ /* ... */ ],
            //'aliases' => [ /* ... */ ],
            //'creation_date' => '...'
        ]);
    }

    /**
     * Delete this model's index
     */
    public static function deleteIndex()
    {
        $db = static::getDb();
        $command = $db->createCommand();
        $command->deleteIndex(static::index(), static::type());
    }

    public static function updateRecord($content_id, $columns){
        try{
            $record = self::get($content_id);
            foreach($columns as $key => $value){
                $record->$key = $value;
            }

            return $record->update();
        }
        catch(\Exception $e){
            //handle error here
            return false;
        }
    }

    public static function deleteRecord($content_id)
    {
        try{
            $record = self::get($content_id);
            $record->delete();
            return 1;
        }
        catch(\Exception $e){
            //handle error here
            return false;
        }
    }

    public static function addRecord(Elastic $content){
        $isExist = false;

        try{
            $record = self::get($content->id);
            if(!$record){
                $record = new self();
                $record->setPrimaryKey($content->id);
            }
            else{
                $isExist = true;
            }
        }
        catch(\Exception $e){
            $record = new self();
            $record->setPrimaryKey($content->id);
        }

        $suppliers = [
            ['id' => '1', 'name' => 'ABC'],
            ['id' => '2', 'name' => 'XYZ'],
        ];

        $record->id   = $content->id;
        $record->path = $content->path;
        $record->content = $content->content;

        try{
            if(!$isExist){
                $result = $record->insert();
            }
            else{
                $result = $record->update();
            }
        }
        catch(\Exception $e){
            $result = false;
            //handle error here
        }

        return $result;
    }
}