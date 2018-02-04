<?php

use yii\db\Migration;

/**
 * Handles the creation of table `composition`.
 * Has foreign keys to the tables:
 *
 * - `music`
 * - `text`
 * - `file`
 */
class m180204_130545_create_composition_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('composition', [
            'id' => $this->primaryKey(),
            'music_id' => $this->integer()->notNull(),
            'text_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'creation_date' => $this->dateTime(),
            'notation_file_id' => $this->integer(),
        ]);

        // creates index for column `music_id`
        $this->createIndex(
            'idx-composition-music_id',
            'composition',
            'music_id'
        );

        // add foreign key for table `music`
        $this->addForeignKey(
            'fk-composition-music_id',
            'composition',
            'music_id',
            'music',
            'id',
            'CASCADE'
        );

        // creates index for column `text_id`
        $this->createIndex(
            'idx-composition-text_id',
            'composition',
            'text_id'
        );

        // add foreign key for table `text`
        $this->addForeignKey(
            'fk-composition-text_id',
            'composition',
            'text_id',
            'text',
            'id',
            'CASCADE'
        );

        // creates index for column `notation_file_id`
        $this->createIndex(
            'idx-composition-notation_file_id',
            'composition',
            'notation_file_id'
        );

        // add foreign key for table `file`
        $this->addForeignKey(
            'fk-composition-notation_file_id',
            'composition',
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
        // drops foreign key for table `music`
        $this->dropForeignKey(
            'fk-composition-music_id',
            'composition'
        );

        // drops index for column `music_id`
        $this->dropIndex(
            'idx-composition-music_id',
            'composition'
        );

        // drops foreign key for table `text`
        $this->dropForeignKey(
            'fk-composition-text_id',
            'composition'
        );

        // drops index for column `text_id`
        $this->dropIndex(
            'idx-composition-text_id',
            'composition'
        );

        // drops foreign key for table `file`
        $this->dropForeignKey(
            'fk-composition-notation_file_id',
            'composition'
        );

        // drops index for column `notation_file_id`
        $this->dropIndex(
            'idx-composition-notation_file_id',
            'composition'
        );

        $this->dropTable('composition');
    }
}
