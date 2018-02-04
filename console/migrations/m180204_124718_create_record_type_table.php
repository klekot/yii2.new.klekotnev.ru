<?php

use yii\db\Migration;

/**
 * Handles the creation of table `record_type`.
 */
class m180204_124718_create_record_type_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('record_type', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('record_type');
    }
}
