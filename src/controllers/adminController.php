<?php namespace bcmPHP\controllers;

use bcmPHP\controllers\PostController;

class AdminController extends  PostController {
  
  public function addPost($tabName){
    return $this->model->post($tabName);
  }
}
(new AdminController())->addPost('posts');
