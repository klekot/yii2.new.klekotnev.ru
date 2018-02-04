<?php

use yii\db\Migration;

/**
 * Handles the creation of table `author`.
 * Has foreign keys to the tables:
 *
 * - `person`
 */
class m180204_124913_create_author_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('author', [
            'id' => $this->primaryKey(),
            'person_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `person_id`
        $this->createIndex(
            'idx-author-person_id',
            'author',
            'person_id'
        );

        // add foreign key for table `person`
        $this->addForeignKey(
            'fk-author-person_id',
            'author',
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
            'fk-author-person_id',
            'author'
        );

        // drops index for column `person_id`
        $this->dropIndex(
            'idx-author-person_id',
            'author'
        );

        $this->dropTable('author');
    }
}
