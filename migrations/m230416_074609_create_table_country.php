<?php

use yii\db\Migration;

/**
 * Class m230416_074609_create_table_country
 */
class m230416_074609_create_table_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('country', [
            'id' => $this->primaryKey()->unsigned(),
            'code' => $this->string(2)->unique(),
            'name' => $this->string(80)->notNull(),
            'phonecode' => $this->string(5)->notNull(),
            'lat' => $this->string(45)->notNull(),
            'lng' => $this->string(45)->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('country');
    }


//    // Use up()/down() to run migration code without a transaction.
//    public function up()
//    {
//        $this -> createTable('country', [
//            'id' => $this->primaryKey()->unsigned(),
//            'code' => $this->string(2)->unique(),
//            'name' => $this->string(80)->notNull(),
//            'phonecode' => $this->string(5)->notNull(),
//            'lat' => $this->string(45)->notNull(),
//            'lng' => $this->string(45)->notNull(),
//        ]);
//
//    }
//
//    public function down()
//    {
//        echo "m230416_074609_create_table_country cannot be reverted.\n";
//
//        return false;
//        $this->dropTable('country');
//
//    }

}
