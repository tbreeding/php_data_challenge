<?php

namespace app\Http\Controllers;

class IndexController {
    public function index() {
        define('IN_PRODUCTION', true);

        $site_url = SITE_URL;
        $content = 'listPage/layout.php';
        include '../resources/views/html-wrapper.php';
    }
}
