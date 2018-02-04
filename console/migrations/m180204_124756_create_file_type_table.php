<?php

use yii\db\Migration;

/**
 * Handles the creation of table `file_type`.
 */
class m180204_124756_create_file_type_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('file_type', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('file_type');
    }
}
