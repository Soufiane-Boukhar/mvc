<?php

class ContactController {
    public function index() {
        require_once('../app/models/Contact.php');
        $model = new Contact();
        $data = $model->getData();
        require_once('../app/views/contact/index.php');
    }
}
