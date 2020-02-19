<?php namespace bcmPHP\controllers;
use bcmPHP\db\Connection;

class PostController {
    private $module;


    public function __construct($model){
        $this->model = $model;
    } 

    public function dataPost() {
        return $this->model->get();
    }

    public function deletePost($id){
        return $this->model->delete($id);
    }
}


