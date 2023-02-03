<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%forms}}`.
 */
class m220107_141339_create_forms_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%forms}}', [
            'id' => $this->primaryKey()->notNull(),
            'phone' => $this->string(255)->notNull(),
            'ip' => $this->string(128)->notNull(),
            'user_agent' => $this->text()->notNull(),
            'ktoken' => $this->string(255),
            'external_click_id' => $this->string(255),
            'provider_id' => $this->integer(),
            'publisher_id' => $this->string(255),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'deleted_at' => $this->timestamp()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%forms}}');
    }
}
