<?php 

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class AddBlog extends Migration 
{
   private $tableName = 'News';

   public function up()
   {
      $this->forge->createTable($this->tableName, true, [
         'id' => [
            'type'          => 'INT', 
            'constraint'    => 5,
            'unsigned'      => true,
            'autoincrement' => true,
         ], 
         'title' => [
            'type' => 'varchar',
            'constraint' => '200',
         ],
         'description' => [
            'type' => 'TEXT', 
            'null' => false,
         ], 
      ]);
      $this->forge->addPrimaryKey('id');
   }

   public function down()
   {
      $this->forge->dropTable($this->tableName);
   }
}

