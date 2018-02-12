<?php

use yii\db\Migration;

/**
 * Handles adding is_musician to table `person`.
 */
class m180210_092318_add_is_musician_column_to_person_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('person', 'is_musician', $this->integer()->defaultValue(0));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('person', 'is_musician');
    }
}
