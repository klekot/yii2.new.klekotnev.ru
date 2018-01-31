<?php

use yii\db\Migration;

/**
 * Handles the creation of table `page_content`.
 */
class m180121_110826_create_page_content_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('page_content', [
            'id' => $this->primaryKey(),
            'path' => $this->string()->notNull()->unique(),
            'content' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('page_content');
    }
}
