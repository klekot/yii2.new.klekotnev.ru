<?php

use yii\db\Migration;

/**
 * Handles the creation of table `record`.
 * Has foreign keys to the tables:
 *
 * - `composition`
 * - `album`
 * - `collective`
 * - `record_type`
 * - `file`
 */
class m180204_131246_create_record_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('record', [
            'id' => $this->primaryKey(),
            'composition_id' => $this->integer()->notNull(),
            'album_id' => $this->integer()->notNull(),
            'collective_id' => $this->integer()->notNull(),
            'creation_date' => $this->dateTime(),
            'record_type_id' => $this->integer()->notNull(),
            'duration' => $this->integer()->notNull()->defaultValue(0),
            'file_id' => $this->integer(),
            'format' => $this->string(),
            'sample_rate' => $this->string(),
            'bit_depth' => $this->string(),
        ]);

        // creates index for column `composition_id`
        $this->createIndex(
            'idx-record-composition_id',
            'record',
            'composition_id'
        );

        // add foreign key for table `composition`
        $this->addForeignKey(
            'fk-record-composition_id',
            'record',
            'composition_id',
            'composition',
            'id',
            'CASCADE'
        );

        // creates index for column `album_id`
        $this->createIndex(
            'idx-record-album_id',
            'record',
            'album_id'
        );

        // add foreign key for table `album`
        $this->addForeignKey(
            'fk-record-album_id',
            'record',
            'album_id',
            'album',
            'id',
            'CASCADE'
        );

        // creates index for column `collective_id`
        $this->createIndex(
            'idx-record-collective_id',
            'record',
            'collective_id'
        );

        // add foreign key for table `collective`
        $this->addForeignKey(
            'fk-record-collective_id',
            'record',
            'collective_id',
            'collective',
            'id',
            'CASCADE'
        );

        // creates index for column `record_type_id`
        $this->createIndex(
            'idx-record-record_type_id',
            'record',
            'record_type_id'
        );

        // add foreign key for table `record_type`
        $this->addForeignKey(
            'fk-record-record_type_id',
            'record',
            'record_type_id',
            'record_type',
            'id',
            'CASCADE'
        );

        // creates index for column `file_id`
        $this->createIndex(
            'idx-record-file_id',
            'record',
            'file_id'
        );

        // add foreign key for table `file`
        $this->addForeignKey(
            'fk-record-file_id',
            'record',
            'file_id',
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
        // drops foreign key for table `composition`
        $this->dropForeignKey(
            'fk-record-composition_id',
            'record'
        );

        // drops index for column `composition_id`
        $this->dropIndex(
            'idx-record-composition_id',
            'record'
        );

        // drops foreign key for table `album`
        $this->dropForeignKey(
            'fk-record-album_id',
            'record'
        );

        // drops index for column `album_id`
        $this->dropIndex(
            'idx-record-album_id',
            'record'
        );

        // drops foreign key for table `collective`
        $this->dropForeignKey(
            'fk-record-collective_id',
            'record'
        );

        // drops index for column `collective_id`
        $this->dropIndex(
            'idx-record-collective_id',
            'record'
        );

        // drops foreign key for table `record_type`
        $this->dropForeignKey(
            'fk-record-record_type_id',
            'record'
        );

        // drops index for column `record_type_id`
        $this->dropIndex(
            'idx-record-record_type_id',
            'record'
        );

        // drops foreign key for table `file`
        $this->dropForeignKey(
            'fk-record-file_id',
            'record'
        );

        // drops index for column `file_id`
        $this->dropIndex(
            'idx-record-file_id',
            'record'
        );

        $this->dropTable('record');
    }
}
