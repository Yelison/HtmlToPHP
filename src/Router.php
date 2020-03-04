<?php namespace bcmPHP;


use bcmPHP\controllers\PostController;
use bcmPHP\models\PostModel;
use bcmPHP\db\Connection;

require_once 'src/controllers/PostController.php';
require_once 'src/db/Connection.php';
require_once 'src/models/PostModel.php';
  
$posts = new PostController(new PostModel(Connection::pdo()));

class Router {

  protected $route = [];

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
    require (array_key_exists($dir, $this->route) ? $this->route[$dir] : 'src/views/404.php');
  }
}
