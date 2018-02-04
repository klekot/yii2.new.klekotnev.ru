<?php

use yii\db\Migration;

/**
 * Handles the creation of table `text_author`.
 * Has foreign keys to the tables:
 *
 * - `text`
 * - `author`
 */
class m180204_131700_create_junction_table_for_text_and_author_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('text_author', [
            'text_id' => $this->integer(),
            'author_id' => $this->integer(),
            'PRIMARY KEY(text_id, author_id)',
        ]);

        // creates index for column `text_id`
        $this->createIndex(
            'idx-text_author-text_id',
            'text_author',
            'text_id'
        );

        // add foreign key for table `text`
        $this->addForeignKey(
            'fk-text_author-text_id',
            'text_author',
            'text_id',
            'text',
            'id',
            'CASCADE'
        );

        // creates index for column `author_id`
        $this->createIndex(
            'idx-text_author-author_id',
            'text_author',
            'author_id'
        );

        // add foreign key for table `author`
        $this->addForeignKey(
            'fk-text_author-author_id',
            'text_author',
            'author_id',
            'author',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `text`
        $this->dropForeignKey(
            'fk-text_author-text_id',
            'text_author'
        );

        // drops index for column `text_id`
        $this->dropIndex(
            'idx-text_author-text_id',
            'text_author'
        );

        // drops foreign key for table `author`
        $this->dropForeignKey(
            'fk-text_author-author_id',
            'text_author'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-text_author-author_id',
            'text_author'
        );

        $this->dropTable('text_author');
    }
}
