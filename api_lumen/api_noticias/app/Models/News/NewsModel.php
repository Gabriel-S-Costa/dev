<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
   /**    
    * @var string
    */
   protected $table = 'news';

   /**
    * @var array
    */
   protected $fillable = [
      'author_id', 
      'title',
      'subtitle',
      'description',
      'publication_date', 
      'active'
   ];

   /**
    * @var array
    */
   protected $rules = [

   ];

   /**
    * @var boolean
    */
   public $timestamps = false;


}
