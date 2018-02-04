<?php

use yii\db\Migration;

/**
 * Handles the creation of table `text`.
 * Has foreign keys to the tables:
 *
 * - `file`
 */
class m180204_125704_create_text_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('text', [
            'id' => $this->primaryKey(),
            'content_file_id' => $this->integer()->notNull(),
            'creation_date' => $this->dateTime(),
        ]);

        // creates index for column `content_file_id`
        $this->createIndex(
            'idx-text-content_file_id',
            'text',
            'content_file_id'
        );

        // add foreign key for table `file`
        $this->addForeignKey(
            'fk-text-content_file_id',
            'text',
            'content_file_id',
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
            'fk-text-content_file_id',
            'text'
        );

        // drops index for column `content_file_id`
        $this->dropIndex(
            'idx-text-content_file_id',
            'text'
        );

        $this->dropTable('text');
    }
}
