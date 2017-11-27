<?php

use yii\db\Migration;

class m171127_173034_create_table_player extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%player}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'name' => $this->string(45)->notNull(),
            'surname' => $this->string(45)->notNull(),
            'email' => $this->string(45)->notNull(),
            'except_id' => $this->integer(11),
            'nick' => $this->string(45)->notNull(),
        ], $tableOptions);

        $this->createIndex('email_UNIQUE', '{{%player}}', 'email', true);
    }

    public function safeDown()
    {
        $this->dropTable('{{%player}}');
    }
}
