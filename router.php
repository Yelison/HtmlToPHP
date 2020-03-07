<?php

$route = new bcmPHP\Router;

$route->set('', 'controllers/IndexController.php');
$route->set('admin', 'views/admin.php');
$route->set('post', 'controllers/AdminController.php');

?>