<?php namespace bcmPHP\models;

use bcmPHP\db\Connection;
use PDO;

class PostModel {
  private $db;
  public function __construct(){
    $this->db=Connection::pdo();
  }

  public function get(){
    $statement = $this->db->prepare("select * from posts");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_OBJ);
  }

  public function post($table){

    $query = "INSERT INTO `$table` (title, autor, content, urlPost) VALUES (:title, :autor, :content, :urlPost)";
    $statement = $this->db->prepare($query);
    $statement->bindParam(':title', $_POST['name'], PDO::PARAM_STR);
    $statement->bindParam(':autor', $_POST['autor'], PDO::PARAM_STR);
    $statement->bindParam(':content', $_POST['content'], PDO::PARAM_STR);
    $statement->bindParam(':urlPost', hash('md4', $_POST['name']) , PDO::PARAM_STR);
    $statement->execute();
  }

  public function delete($id){
    $query = "DELETE FROM posts WHERE id=$id";

    $statement = $this->db->prepare($query);
    $statement->execute();
  }

  public function update($id){

    $query = "UPDATE posts SET title = :title, autor = :autor, content = :content WHERE id = $id";
    $statement = $this->db->prepare($query);
    $statement->bindParam(':title', $_POST['titleSave'], PDO::PARAM_STR);
    $statement->bindParam(':autor',  $_POST['autorSave'], PDO::PARAM_STR);
    $statement->bindParam(':content', $_POST['contentSave'], PDO::PARAM_STR);
    $statement->execute();
  }

  public function getHash(){
    $query = "SELECT urlPost FROM posts";

    $statement = $this->db->prepare($query);
    $statement->execute();
  }

  public function filterHash($hash){
    $query = "SELECT * FROM posts WHERE urlPost='$hash'";

    $statement = $this->db->prepare($query);
    $statement->execute();
  }
}
