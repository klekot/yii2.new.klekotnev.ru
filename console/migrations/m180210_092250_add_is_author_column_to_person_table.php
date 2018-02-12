<?php

use yii\db\Migration;

/**
 * Handles adding is_author to table `person`.
 */
class m180210_092250_add_is_author_column_to_person_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('person', 'is_author', $this->integer()->defaultValue(0));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('person', 'is_author');
    }
}
