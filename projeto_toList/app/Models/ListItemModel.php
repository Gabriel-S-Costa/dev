<?php 

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class ListItemModel extends Model
{
   private $table = '';

   public function __construct()
   {
      $db = Database::connect('todo_list');
      parent::__construct($db);
   }

   public function saveListItem($dataListItem)
   {
      
   }
}