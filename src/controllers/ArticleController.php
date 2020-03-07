<?php namespace bcmPHP\controllers;

use bcmPHP\controllers\PostController;

class ArticleController extends PostController{

    public function view(){
        require 'src/views/article.php';
    }
}

(new ArticleController())->view();