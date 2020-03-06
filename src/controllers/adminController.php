<?php namespace bcmPHP\controllers;

use bcmPHP\controllers\PostController;

class AdminController extends  PostController {
  
  public function addPost($tabName){
    return $this->model->post($tabName);
  }

  public function setHash(){
    
    var_dump("hole");
  }
}
(new AdminController())->addPost('posts');
