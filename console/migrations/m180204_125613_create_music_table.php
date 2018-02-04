<?php

use yii\db\Migration;

/**
 * Handles the creation of table `music`.
 * Has foreign keys to the tables:
 *
 * - `file`
 */
class m180204_125613_create_music_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('music', [
            'id' => $this->primaryKey(),
            'notation_file_id' => $this->integer()->notNull(),
            'creation_date' => $this->dateTime(),
        ]);

        // creates index for column `notation_file_id`
        $this->createIndex(
            'idx-music-notation_file_id',
            'music',
            'notation_file_id'
        );

        // add foreign key for table `file`
        $this->addForeignKey(
            'fk-music-notation_file_id',
            'music',
            'notation_file_id',
            'file',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `file`
        $this->dropForeignKey(
            'fk-music-notation_file_id',
            'music'
        );

        // drops index for column `notation_file_id`
        $this->dropIndex(
            'idx-music-notation_file_id',
            'music'
        );

        $this->dropTable('music');
    }
}
