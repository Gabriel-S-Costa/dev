<?php 

/**
 * @param String $param
 * @return string 
 **/
function site(string $param = null): string
{
   if($param && !empty(SITE[$param])) {
      return SITE[$param];
   }
   return SITE['root'];
}

// function routeImage(string $imageUrl): string {}

/**
 * @param string $path
 * @param bool $time
 * @return string 
 **/
function asset(string $path, $time = true): string
{
   $file = SITE['root'] . "/views/assets{$path}"; 
   $fileOnDir = dirname(__DIR__)."/views/assets/{$path}";

   if($time && file_exists($fileOnDir)) {
      // força uam atualização quando houver modifição no arquivo
      // o time serve como verificador
      $file .= "?time=".filemtime($fileOnDir); 
   }

   return $file;
}

function flash(string $type = null, string $message = null): ?string
{
   if($type && $message){
      $_SESSION['flash'] = [
         "type" => $type,
         "message" => $message
      ];

      return null;
   }  

   if(!empty($_SESSION['flash']) && $flash = $_SESSION['flash']) {
      unset($_SESSION['flash']);
      return "<div class=\"message {$flash["type"]}\">{$flash["message"]}</div>";
   }

   return null;
      
}