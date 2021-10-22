<?php 

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request as HttpRequest;
use Laravel\Lumen\Routing\Controller as BaseController;

class UserController extends BaseController 
{
   public $request;

   public function __construct(HttpRequest $request) 
   {
      $this->request = $request;   
   }

   public function listUser()
   {  

   }

   public function create()
   {  
      $userData = $this->request->all();

      $userModel = new UserModel();
      $cod_resp = $userModel->createUser($userData);
      
      
   }  

   public function upadate($id)
   {
      # code...
   }

   public function delete($id)
   {
      # code...
   }

}