<?php

use yii\db\Migration;

/**
 * Handles the creation of table `collective_musician`.
 * Has foreign keys to the tables:
 *
 * - `collective`
 * - `musician`
 */
class m180204_130231_create_junction_table_for_collective_and_musician_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('collective_musician', [
            'collective_id' => $this->integer(),
            'musician_id' => $this->integer(),
            'PRIMARY KEY(collective_id, musician_id)',
        ]);

        // creates index for column `collective_id`
        $this->createIndex(
            'idx-collective_musician-collective_id',
            'collective_musician',
            'collective_id'
        );

        // add foreign key for table `collective`
        $this->addForeignKey(
            'fk-collective_musician-collective_id',
            'collective_musician',
            'collective_id',
            'collective',
            'id',
            'CASCADE'
        );

        // creates index for column `musician_id`
        $this->createIndex(
            'idx-collective_musician-musician_id',
            'collective_musician',
            'musician_id'
        );

        // add foreign key for table `musician`
        $this->addForeignKey(
            'fk-collective_musician-musician_id',
            'collective_musician',
            'musician_id',
            'musician',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `collective`
        $this->dropForeignKey(
            'fk-collective_musician-collective_id',
            'collective_musician'
        );

        // drops index for column `collective_id`
        $this->dropIndex(
            'idx-collective_musician-collective_id',
            'collective_musician'
        );

        // drops foreign key for table `musician`
        $this->dropForeignKey(
            'fk-collective_musician-musician_id',
            'collective_musician'
        );

        // drops index for column `musician_id`
        $this->dropIndex(
            'idx-collective_musician-musician_id',
            'collective_musician'
        );

        $this->dropTable('collective_musician');
    }
}
