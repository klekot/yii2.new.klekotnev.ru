<?php

use yii\db\Migration;

/**
 * Handles the creation of table `file`.
 * Has foreign keys to the tables:
 *
 * - `file_type`
 */
class m180204_125151_create_file_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('file', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'path' => $this->string()->notNull(),
            'file_type_id' => $this->integer(),
        ]);

        // creates index for column `file_type_id`
        $this->createIndex(
            'idx-file-file_type_id',
            'file',
            'file_type_id'
        );

        // add foreign key for table `file_type`
        $this->addForeignKey(
            'fk-file-file_type_id',
            'file',
            'file_type_id',
            'file_type',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `file_type`
        $this->dropForeignKey(
            'fk-file-file_type_id',
            'file'
        );

        // drops index for column `file_type_id`
        $this->dropIndex(
            'idx-file-file_type_id',
            'file'
        );

        $this->dropTable('file');
    }
}
