<?php

namespace app\Http\controllers;

class StoreController {
    public function index() {
        define('IN_PRODUCTION', true);

        $site_url = SITE_URL;
        include '../data/store_item.php';
        header('Location: '. $site_url);
    }
}
