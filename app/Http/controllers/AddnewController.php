<?php

namespace app\Http\Controllers;

class AddnewController {
    public function index() {
        define('IN_PRODUCTION', true);

        $site_url = SITE_URL;
        $content = 'addNewPage/layout.php';
        include '../resources/views/html-wrapper.php';
    }
}
