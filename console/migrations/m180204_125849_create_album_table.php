<?php

use yii\db\Migration;

/**
 * Handles the creation of table `album`.
 * Has foreign keys to the tables:
 *
 * - `file`
 */
class m180204_125849_create_album_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('album', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'creation_date' => $this->dateTime(),
            'cover_file_id' => $this->integer(),
        ]);

        // creates index for column `cover_file_id`
        $this->createIndex(
            'idx-album-cover_file_id',
            'album',
            'cover_file_id'
        );

        // add foreign key for table `file`
        $this->addForeignKey(
            'fk-album-cover_file_id',
            'album',
            'cover_file_id',
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
            'fk-album-cover_file_id',
            'album'
        );

        // drops index for column `cover_file_id`
        $this->dropIndex(
            'idx-album-cover_file_id',
            'album'
        );

        $this->dropTable('album');
    }
}
