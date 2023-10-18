<?php

namespace App\ControllersApi;

class NotFoundController extends ControllerApi {

    public function renderView() {
        header('HTTP/1.0 404 not found');
        echo '404';
    }

}