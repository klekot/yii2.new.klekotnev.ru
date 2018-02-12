<?php

use yii\db\Migration;

/**
 * Handles the creation of table `music_author`.
 * Has foreign keys to the tables:
 *
 * - `music`
 * - `author`
 */
class m180204_131640_create_junction_table_for_music_and_author_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('music_author', [
            'music_id' => $this->integer(),
            'author_id' => $this->integer(),
            'PRIMARY KEY(music_id, author_id)',
        ]);

        // creates index for column `music_id`
        $this->createIndex(
            'idx-music_author-music_id',
            'music_author',
            'music_id'
        );

        // add foreign key for table `music`
        $this->addForeignKey(
            'fk-music_author-music_id',
            'music_author',
            'music_id',
            'music',
            'id',
            'CASCADE'
        );

        // creates index for column `author_id`
        $this->createIndex(
            'idx-music_author-author_id',
            'music_author',
            'author_id'
        );

        // add foreign key for table `author`
        $this->addForeignKey(
            'fk-music_author-author_id',
            'music_author',
            'author_id',
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
        // drops foreign key for table `music`
        $this->dropForeignKey(
            'fk-music_author-music_id',
            'music_author'
        );

        // drops index for column `music_id`
        $this->dropIndex(
            'idx-music_author-music_id',
            'music_author'
        );

        // drops foreign key for table `author`
        $this->dropForeignKey(
            'fk-music_author-author_id',
            'music_author'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-music_author-author_id',
            'music_author'
        );

        $this->dropTable('music_author');
    }
}
