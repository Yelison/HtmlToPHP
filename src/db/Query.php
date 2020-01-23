<?php namespace bcmPHP\db;

use PDO;

class Query {

  protected $pdo;

  public function __construct(PDO $pdo){
    $this->pdo = $pdo;
  }

  public function get($table){
    $statement = $this->pdo->prepare("select * from $table");

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_OBJ);
  }

  public function insert($table, $title, $autor, $content){
    $query = "INSERT INTO `$table` (title, autor, content) VALUES (:title, :autor, :content)";
    $statement = $this->pdo->prepare($query);
    $statement->bindParam(':title', $title, PDO::PARAM_STR);
    $statement->bindParam(':autor', $autor, PDO::PARAM_STR);
    $statement->bindParam(':content', $content, PDO::PARAM_STR);

    $statement->execute();
  }
}