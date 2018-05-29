<?php 


class NameController {
    public function index() {
        include '../resources/views/html-wrapper.php';
    }
}

$namePage = new NameController();
$namePage->index();