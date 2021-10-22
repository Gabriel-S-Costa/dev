<?php 

require_once './src/config/Route.php';

$route = new Route($_GET);

$module = $route->getModule();

$route->redirect($module);

