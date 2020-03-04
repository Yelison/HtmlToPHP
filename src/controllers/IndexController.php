<?php

use bcmPHP\models\PostModel;

class IndexController {

    public function __construct(PostModel $model){
        $this->model = $model;
    }

    public function dataPost() {
        return $this->model->get();
    }

    public function view(){
        require 'src/views/index.php';
    }
}

(new IndexController(new PostModel()))->view();







