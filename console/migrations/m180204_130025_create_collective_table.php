<?php

use yii\db\Migration;

/**
 * Handles the creation of table `collective`.
 */
class m180204_130025_create_collective_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('collective', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'begin_date' => $this->dateTime(),
            'end_date' => $this->dateTime(),
            'creation_place' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('collective');
    }
}
