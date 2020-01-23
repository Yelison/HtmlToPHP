<?php

$route = new bcmPHP\Router;

$route->set('', 'view/index.php');
$route->set('about', 'view/about.php');
$route->set('admin', 'view/admin.php');
$route->set('post', 'models/post.php');
