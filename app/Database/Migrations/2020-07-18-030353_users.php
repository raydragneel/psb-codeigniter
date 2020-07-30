<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
						'id'          => [
								'type'           => 'INT',
								'constraint'     => 11,
								'unsigned'       => true,
								'auto_increment' => true,
						],
						'nama'       => [
							'type'           => 'VARCHAR',
							'constraint'     => '255',
						],
						'username' => [
								'type'           => 'VARCHAR',
								'constraint' => '255',
								'unique' => true
						],
						'email' => [
								'type' => 'VARCHAR',
								'constraint' => '255',
								'unique' => true
						],
						'password' => [
								'type' => 'VARCHAR',
								'constraint' => '255'
						],
						'type' => [
								'type' => 'TINYINT',
								'constraint' => 1
						],
						'last_login' => [
							'type' => 'DATETIME',
							'null' => true
						],
						'created_at' => [
							'type' => 'DATETIME',
							'null' => true
						],
						'updated_at' => [
							'type' => 'DATETIME',
							'null' => true
						],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
