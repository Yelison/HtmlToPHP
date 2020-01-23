<?php namespace bcmPHP\db;

use PDO;

class Connection {

  public static function pdo( $serverName = "localhost", 
                              $userName = "root", 
                              $password = "welc0me", 
                              $tableName = "published_post"){
    try 
    {
      $connect = new PDO("mysql:host=$servername;dbname=$tableName", $userName, $password);

      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $connect;
    }
    catch(PDOException $e)
    {
      echo "Connection failed: " . $e->getMessage();
    }
  }
}