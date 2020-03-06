<?php

use bcmPHP\controllers\PostController;

class IndexController extends PostController{
    public function view(){
        require 'src/views/index.php';
    }
}

(new IndexController())->view();
