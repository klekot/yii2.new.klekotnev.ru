<?php

use yii\db\Migration;

/**
 * Handles the creation of table `idea`.
 */
class m180204_122950_create_idea_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('idea', [
            'id' => $this->primaryKey(),
            'idea' => $this->string(255)->notNull(),
            'description' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('idea');
    }
}
