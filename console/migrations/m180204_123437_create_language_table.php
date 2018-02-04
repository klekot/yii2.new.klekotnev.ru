<?php

use yii\db\Migration;

/**
 * Handles the creation of table `language`.
 */
class m180204_123437_create_language_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('language', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'authentic_name' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('language');
    }
}
