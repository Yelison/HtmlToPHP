<?php 

use bcmPHP\models\PostModel;
use bcmPHP\db\Connection;
use bcmPHP\controllers\PostController;

$postModel = new PostController();

$postModel->addPost('posts');
