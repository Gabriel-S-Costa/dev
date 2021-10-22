<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class ListsModel extends Model
{
   public function __construct()
   {
      $db = Database::connect('todo_list');
      parent::__construct($db);
   }

   public function saveList($dataList)
   {
      
   }

}