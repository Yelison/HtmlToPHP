<?php namespace bcmPHP\db;

use PDO;

class Connection {

  public static function pdo(){
    try {
      $connect = new PDO("mysql:dbname=publishedPosts;host=localhost", "yelison", "welc0me");
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $connect;

    }
    catch(PDOException $e)
    {
      echo "Connection failed: " . $e->getMessage();
    }
  }
}