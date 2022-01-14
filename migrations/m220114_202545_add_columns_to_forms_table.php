<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%forms}}`.
 */
class m220114_202545_add_columns_to_forms_table extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->addColumn('forms', 'ktoken', $this->string(255)->after('user_agent'));
		$this->addColumn('forms', 'provider_id', $this->integer()->after('ktoken'));
		$this->addColumn('forms', 'publisher_id', $this->string(255)->after('provider_id'));
	}
	
	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		$this->dropColumn('forms', 'ktoken');
		$this->dropColumn('forms', 'provider_id');
		$this->dropColumn('forms', 'publisher_id');
	}
}
