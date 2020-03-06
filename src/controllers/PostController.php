<?php namespace bcmPHP\controllers;

use bcmPHP\models\PostModel;

class PostController {

    public function __construct(){
        $this->model = new PostModel();
    }

    public function addPost($tabName){
        return $this->model->post($tabName);
    }

    public function deletePost($id){
        return $this->model->delete($id);
    }

    public function savePost($id){
        return $this->model->update($id);
    }

    public function setHash(){
        return $this->model->getHash();
    }
}
