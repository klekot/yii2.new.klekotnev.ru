<?php

use yii\db\Migration;

/**
 * Handles the creation of table `musician`.
 * Has foreign keys to the tables:
 *
 * - `person`
 */
class m180204_124945_create_musician_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('musician', [
            'id' => $this->primaryKey(),
            'person_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `person_id`
        $this->createIndex(
            'idx-musician-person_id',
            'musician',
            'person_id'
        );

        // add foreign key for table `person`
        $this->addForeignKey(
            'fk-musician-person_id',
            'musician',
            'person_id',
            'person',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `person`
        $this->dropForeignKey(
            'fk-musician-person_id',
            'musician'
        );

        // drops index for column `person_id`
        $this->dropIndex(
            'idx-musician-person_id',
            'musician'
        );

        $this->dropTable('musician');
    }
}
