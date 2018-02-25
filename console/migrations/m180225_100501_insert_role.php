<?php

use yii\db\Migration;

/**
 * Class m180225_100501_insert_role
 */
class m180225_100501_insert_role extends Migration
{
    public function up()
    {
        $this->insert('role',array(
            'name'=>'admin',
        ));
        $this->insert('role',array(
            'name'=>'user',
        ));
    }

    public function down()
    {
        echo "m180225_100501_insert_role does not support migration down.\n";
        return false;
    }
}
