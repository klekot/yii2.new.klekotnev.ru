<?php

use yii\db\Migration;

/**
 * Handles the creation of table `musician_record`.
 * Has foreign keys to the tables:
 *
 * - `record`
 * - `instrument`
 */
class m180204_132732_create_musician_record_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('musician_record', [
            'id' => $this->primaryKey(),
            'musician_id' => $this->integer()->notNull(),
            'record_id' => $this->integer()->notNull(),
            'instrument_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `musician_id`
        $this->createIndex(
            'idx-musician_record-musician_id',
            'musician_record',
            'musician_id'
        );

        // add foreign key for table `musician`
        $this->addForeignKey(
            'fk-musician_record-musician_id',
            'musician_record',
            'musician_id',
            'person',
            'id',
            'CASCADE'
        );

        // creates index for column `record_id`
        $this->createIndex(
            'idx-musician_record-record_id',
            'musician_record',
            'record_id'
        );

        // add foreign key for table `record`
        $this->addForeignKey(
            'fk-musician_record-record_id',
            'musician_record',
            'record_id',
            'record',
            'id',
            'CASCADE'
        );

        // creates index for column `instrument_id`
        $this->createIndex(
            'idx-musician_record-instrument_id',
            'musician_record',
            'instrument_id'
        );

        // add foreign key for table `instrument`
        $this->addForeignKey(
            'fk-musician_record-instrument_id',
            'musician_record',
            'instrument_id',
            'instrument',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `record`
        $this->dropForeignKey(
            'fk-musician_record-record_id',
            'musician_record'
        );

        // drops index for column `record_id`
        $this->dropIndex(
            'idx-musician_record-record_id',
            'musician_record'
        );

        // drops foreign key for table `instrument`
        $this->dropForeignKey(
            'fk-musician_record-instrument_id',
            'musician_record'
        );

        // drops index for column `instrument_id`
        $this->dropIndex(
            'idx-musician_record-instrument_id',
            'musician_record'
        );

        $this->dropTable('musician_record');
    }
}
