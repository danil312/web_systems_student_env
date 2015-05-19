<?php
define('FL', dirname(__FILE__));
require_once(FL.'/core/Router.php');

$routes=FL.'/core/routes.php';
 
$router = new Router($routes);
$router->run();