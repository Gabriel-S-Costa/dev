<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Addnew extends Migration
{
	private $tableName = 'News';

	public function up()
	{
		$this->forge->addField([
         'id' => [
            'type'          => 'INT', 
            'constraint'    => 5,
            'unsigned'      => true,
            'auto_increment' => true,
         ], 
         'title' => [
            'type' => 'varchar',
            'constraint' => '200',
         ],
         'description' => [
            'type' => 'TEXT', 
            'null' => false,
         ], 
			'created_at' => [
				'type' => 'DATETIME', 
				'null' => false,
			],
			'updated_at' => [
				'type' => 'DATETIME', 
				'null' => false,
			],
			'deleted_at' => [
				'type' => 'DATETIME', 
				'null' => false,
			],
      ]);
      $this->forge->addPrimaryKey('id');
		$this->forge->createTable($this->tableName);
	}

	public function down()
	{
		$this->forge->dropTable($this->tableName);
	}
}
