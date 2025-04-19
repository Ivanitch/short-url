<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%logs}}`.
 */
class m250419_085918_create_logs_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%logs}}', [
            'id'          => $this->primaryKey(),
            'url_id'      => $this->integer()->notNull(),
            'ip_address'  => $this->string(45)->notNull(),
            'accessed_at' => $this->timestamp(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%logs}}');
    }
}
