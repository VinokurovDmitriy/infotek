<?php

use yii\db\Migration;

class m260816_101025_create_catalog_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m260816_101025_create_catalog_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m260816_101025_create_catalog_tables cannot be reverted.\n";

        return false;
    }
    */
}
