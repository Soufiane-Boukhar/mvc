<?php


class HomeController {

    public function index() {
        require_once('../app/models/Home.php');
        $model = new Home();
        $data = $model->getData();
        require_once('../app/views/home/index.php');
    }

    public function edit(){
        require_once('../app/models/Home.php');
        $model = new Home();
        $data = $model->editData();
        require_once('../app/views/home/edit.php');
    }
}
