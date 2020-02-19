<?php 

use bcmPHP\models\PostModel;
use bcmPHP\db\Connection;

$title = $_POST['name'];
$autor = $_POST['autor'];
$content = $_POST['content'];

$postModel = new PostModel((new Connection)::pdo());

$postModel->post('posts', $title, $autor, $content);
