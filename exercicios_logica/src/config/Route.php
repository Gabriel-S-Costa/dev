<?php 

class Route 
{  
   private $module = '';
   // private $path_files = dirname(__FILE__, 1);

   public function __construct(array $params_url = null) {

      if (! is_null($params_url) && isset($params_url['modulo'])) {

         $this->module = $params_url['modulo'];
      }        
   }

   public function getModule() :string
   {
      return $this->module;
   }

   private function getPath() :string
   {
      return $path_files = dirname(__FILE__, 2) . '\\files\\' ;
   }
   
   public function redirect(string $module="") :void   
   {
      if (isset($module) && is_string($module)) {

         $file = $this->getPath() . $module . '.php';

         if (file_exists($file)) {
            require_once $file;
         } else {
            echo 'Arquivo não encontrado.';
         }
      }
   }

}