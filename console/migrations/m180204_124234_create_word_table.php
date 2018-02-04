<?php

use yii\db\Migration;

/**
 * Handles the creation of table `word`.
 * Has foreign keys to the tables:
 *
 * - `idea`
 * - `language`
 */
class m180204_124234_create_word_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('word', [
            'id' => $this->primaryKey(),
            'word' => $this->string()->notNull(),
            'idea_id' => $this->integer()->notNull(),
            'language_id' => $this->integer()->notNull(),
            'transcription' => $this->string(),
            'transcription_rus' => $this->string(),
        ]);

        // creates index for column `idea_id`
        $this->createIndex(
            'idx-word-idea_id',
            'word',
            'idea_id'
        );

        // add foreign key for table `idea`
        $this->addForeignKey(
            'fk-word-idea_id',
            'word',
            'idea_id',
            'idea',
            'id',
            'CASCADE'
        );

        // creates index for column `language_id`
        $this->createIndex(
            'idx-word-language_id',
            'word',
            'language_id'
        );

        // add foreign key for table `language`
        $this->addForeignKey(
            'fk-word-language_id',
            'word',
            'language_id',
            'language',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `idea`
        $this->dropForeignKey(
            'fk-word-idea_id',
            'word'
        );

        // drops index for column `idea_id`
        $this->dropIndex(
            'idx-word-idea_id',
            'word'
        );

        // drops foreign key for table `language`
        $this->dropForeignKey(
            'fk-word-language_id',
            'word'
        );

        // drops index for column `language_id`
        $this->dropIndex(
            'idx-word-language_id',
            'word'
        );

        $this->dropTable('word');
    }
}
