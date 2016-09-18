<?php

use yii\db\Schema;
use yii\db\Migration;

class m160912_124319_create_brands_table extends Migration
{
    public function up()
    {
        $this->createTable('brands', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING
        ]);
    }

    public function down()
    {
        $this->dropTable('brands');
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
