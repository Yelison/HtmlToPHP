<?php

require 'vendor/autoload.php';
require 'router.php';
use bcmPHP\models\post;

$trimUri = trim($_SERVER['REQUEST_URI'],'/');
$route->view($trimUri);

?>