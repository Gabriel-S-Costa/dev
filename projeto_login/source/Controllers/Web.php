<?php 

namespace Source\Controllers;

use stdClass;

/**
 * undocumented class
 */
class Web extends Controller
{
   public function __construct($router) 
   {
      parent::__construct($router);

      // se já estiver logado 
      if(!empty($_SESSION['user'])) {
         $this->router->redirect("app.home");
      }
   }

   public function login(): void
   {
      $head = $this->seo->optimize(
         "Faça o login no" . site("name"),
         site("desc"), 
         $this->router->route("web.login"), 
         ''                  
      )->render();

      echo $this->view->render("theme/login", [ 
         "head" => $head
      ]);
   }

   public function register(): void
   {
      $head = $this->seo->optimize(
         "Crie sua conta no " . site("name"),
         site("desc"), 
         $this->router->route("web.register"), 
         ''                  
      )->render();

      $form_user = new stdClass();
      $form_user->first_name = null;
      $form_user->last_name = null;
      $form_user->email = null;

      echo $this->view->render("theme/register", [ 
         "head" => $head,
         "user" => $form_user
      ]);
   }

   public function forget(): void
   {
      $head = $this->seo->optimize(
         "Recupere sua senha | " . site("name"),
         site("desc"), 
         $this->router->route("web.forget"), 
         ''                  
      )->render();

      echo $this->view->render("theme/forget", [
         "head" => $head
      ]);

   }  

   public function reset($data): void
   {
      $head = $this->seo->optimize(
         "Crie sua nova senha | " . site("name"),
         site("desc"), 
         $this->router->route("web.reset"), 
         ''                  
      )->render();

      echo $this->view->render("theme/reset", [
         "head" => $head
      ]);
   }

   public function error($data): void
   {
      $error = filter_var($data["errcode"], FILTER_VALIDATE_INT);
      $head = $this->seo->optimize(
         "Oooops {$error} | " . site("name"),
         site("desc"), 
         $this->router->route("web.error", ["errcode" => $error]), 
         ''                  
      )->render();

      echo $this->view->render("theme/error", [
         "head" => $head,
         "error" => $error
      ]);
   }

}
