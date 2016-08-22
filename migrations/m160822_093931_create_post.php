<?php

use yii\db\Migration;
use yii\db\Schema;

class m160822_093931_create_post extends Migration
{
    public function up()
    {
        $this->createTable('post', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,
            'user_id' =>Schema::TYPE_INTEGER
        ]);

    }

    public function down()
    {
        $this->dropTable('post');

        return false;
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
