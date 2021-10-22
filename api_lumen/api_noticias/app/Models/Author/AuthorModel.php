<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use News;

class AuthorModel extends Model
{
   /**
    * @var string
    */
   protected $table = 'authors';

   /**
    * @var array
    */
   protected $fillable = [
      'name',
      'last_name',
      'email',
      'password',
      'active',
      'created_at'
   ];

   /**    
    * @var array
    */
   protected $hidden = [
      'password'
   ];

   /**
    * @var boolean
    */
   public $timestamps = false;

   /**
    * Validation rules
    * @var array
    */
   public array $rules = [
      'name' => 'required|alpha',
      'last_name' => 'required|alpha',
      'email' => 'required|email|email:rfc,dns',
      'password' => 'required|between:6,12',
   ];

   /**
    * @return void
    */
   public function news()
   {
      return $this->hasMany(News::class);
   }
}
