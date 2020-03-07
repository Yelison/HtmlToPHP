<?php namespace bcmPHP;
use bcmPHP\controllers\PostController;

class Router {

  protected $route = [];

  public function __construct(){
    $this->controller = new PostController();
  }

  public function set($dir, $file){
    if(!array_key_exists($dir, $this->route)){
      $this->route[$dir] = $file;
    }
    else{
      throw new Exception('This key already exists.');
    }
  }

	public function get(){
    return $this->route;
  }

  public function view($dir){
    $url = $_SERVER['REQUEST_URI'];
    if(stristr($url, "article")){
      require 'controllers/ArticleController.php';
    }
    else{
      require (array_key_exists($dir, $this->route) ? $this->route[$dir] : 'src/views/404.php');
    }
  }
}
