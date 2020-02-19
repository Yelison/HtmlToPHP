<?php namespace bcmPHP\models;

use bcmPHP\db\Connection;
use PDO;

class PostModel {
  
  public function __construct(PDO $pdo){
    $this->pdo = $pdo;
  }

  public function get(){
    $statement = $this->pdo->prepare("select * from posts");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_OBJ);
  }

  public function post($table, $title, $autor, $content){

    $query = "INSERT INTO `$table` (title, autor, content) VALUES (:title, :autor, :content)";
    $statement = $this->pdo->prepare($query);
    $statement->bindParam(':title', $title, PDO::PARAM_STR);
    $statement->bindParam(':autor', $autor, PDO::PARAM_STR);
    $statement->bindParam(':content', $content, PDO::PARAM_STR);
    $statement->execute();
  }

  public function delete($id){
    $query = "DELETE FROM posts WHERE id=$id";

    $statement = $this->pdo->prepare($query);
    $statement->execute();
  }
}
