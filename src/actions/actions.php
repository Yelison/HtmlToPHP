<?php namespace bcmPHP\actions;

use bcmPHP\controllers\PostController;
use bcmPHP\db\Connection;
use bcmPHP\models\PostModel;

require_once '../controllers/PostController.php';
require_once '../db/Connection.php';
require_once '../models/PostModel.php';


$posts = new PostController();

switch ($_GET['action']) {
    case 'save':
        $posts->savePost((int)$_GET['id']);
        break;
    case 'delete':
        $posts->deletePost($_GET['id']);
        break;
    default:
        # code...
        break;
}
?>