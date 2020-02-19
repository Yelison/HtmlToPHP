<?php

$route = new bcmPHP\Router;

$route->set('', 'views/index.php');
$route->set('about', 'views/about.php');
$route->set('admin', 'views/admin.php');
$route->set('post', 'controllers/adminController.php');

?>