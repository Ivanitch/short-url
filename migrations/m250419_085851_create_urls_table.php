<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%urls}}`.
 */
class m250419_085851_create_urls_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%urls}}', [
            'id'           => $this->primaryKey(),
            'original_url' => $this->string(255)->notNull(),
            'short_url'    => $this->string(255)->notNull(),
            'qr_code'      => $this->text(),
            'created_at'   => $this->timestamp(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%urls}}');
    }
}
