<?php

namespace app\Http\controllers;

class StudentdetailsController {
    public function index() {
        define('IN_PRODUCTION', true);

        $site_url = SITE_URL;
        include '../data/get_student_details.php';
        $content = 'detailsPage/layout.php';
        include '../resources/views/html-wrapper.php';
    }
}
