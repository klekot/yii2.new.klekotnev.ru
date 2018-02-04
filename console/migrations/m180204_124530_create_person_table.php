<?php

use yii\db\Migration;

/**
 * Handles the creation of table `person`.
 */
class m180204_124530_create_person_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('person', [
            'id' => $this->primaryKey(),
            'lastname' => $this->string()->notNull(),
            'firstname' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('person');
    }
}
