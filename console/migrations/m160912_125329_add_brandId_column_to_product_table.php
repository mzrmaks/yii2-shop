<?php

use yii\db\Schema;
use yii\db\Migration;

class m160912_125329_add_brandId_column_to_product_table extends Migration
{
    public function up()
    {
        $this->addColumn('product', 'product_id', Schema::TYPE_INTEGER);
    }

    public function down()
    {
        $this->dropColumn('product', 'product_id');
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
