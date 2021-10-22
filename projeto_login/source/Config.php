<?php 
// ponto de configuração global para o projeto

/**
 * SITE CONFIG
 */
define("SITE", [
   "name" => "Auth em MVC com PHP", 
   "desc" => "Aprenda a construir uma aplicação de autenticação em MVC com PHP do jeito certo.", 
   "domain" => "localauth.com", 
   "locale" => "pt_BR", 
   "root" => "http://localhost/projeto_login"
]);

/**
 * SITE MINIFY
 */
if($_SERVER['SERVER_NAME'] == "localhost") {
   require __DIR__ . "/Minify.php";
}

/**
 * DATABSE CONNECT
 */
define("DATA_LAYER_CONFIG", [
   "driver" => "mysql",
   "host" => "localhost",
   "port" => "3306",
   "dbname" => "projeto_login",
   "username" => "root",
   "passwd" => "",
   "options" => [
       PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
       PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
       PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
       PDO::ATTR_CASE => PDO::CASE_NATURAL
   ]
]);

/**
 * SOCIAL CONFIG
 */
define("SOCIAL", [
   "facebook_page" => "",
   "facebook_author" => "",
   "facebook_appId" => "" 
]);

/**
 *  MAIL CONNECT 
 */
define('MAIL', []);

/**
 *  SOCIAL LOGIN: FACEBOOK
 */
define('FACEBOOK_LOGIN', []);

/**
 *  SOCIAL LOGIN: GOOGLE
 */
define('GOOGLE _LOGIN', []);
