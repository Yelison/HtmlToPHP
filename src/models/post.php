<?php namespace bcmPHP\models;

use bcmPHP\db\Connection;
use bcmPHP\db\Query;

  $title = $_POST['name'];
  $autor = $_POST['autor'];
  $content = $_POST['content'];

 (new Query(
  Connection::pdo()
  ))->insert(
    'Post', 
    $title, 
    $autor, 
    $content
  );

  header('Location: admin');

