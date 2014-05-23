<?php
class m140522_030540_createProductsTable extends CDbMigration {
	public function up() {
		$this->createTable ( 'products', array (
				'id' => 'pk',
				'user_id' => 'int not null',
				'name' => 'string not null',
				'desc' => 'text not null',
				'qty' => 'float not null default 0',
				'unit' => 'string not null',
				'cdate' => 'timestamp',
				'mdate' => 'timestamp'
		) );
	}
	public function down() {
		$this->dropTable('products');
		return true;
	}
	
	/*
	 * // Use safeUp/safeDown to do migration with transaction public function safeUp() { } public function safeDown() { }
	 */
}