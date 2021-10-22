<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
   protected $table = 'users';
   
   public function createUser(array $userData=[])
   {
      $result = DB::table($this->table)->insert($userData);
      return $result;
   }
   
}