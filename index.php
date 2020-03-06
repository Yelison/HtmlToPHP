<?php

require 'vendor/autoload.php';
require 'router.php';


$trimUri = trim($_SERVER['REQUEST_URI'],'/');
$route->view($trimUri);

?>