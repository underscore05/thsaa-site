<?php

class m140507_144357_createUsersTable extends CDbMigration {
	
	public function up() {
		$this->createTable ( 'users', array (
				'id' => 'pk',
				'uname' => 'string not null',
				'pass' => 'string not null',
				'cdate' => 'timestamp',
				'mdate' => 'timestamp'
		) );
	}
	
	public function down() {
		$this->dropTable ( 'users' );
		return true;
	}
	
	/*
	 * // Use safeUp/safeDown to do migration with transaction public function safeUp() { } public function safeDown() { }
	 */
}