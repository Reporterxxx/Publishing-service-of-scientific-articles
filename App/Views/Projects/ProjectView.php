<?php

namespace App\Views\Projects;

use App\Views\View;

class ProjectView extends View
{

    public function apiSender($array) {
//        echo '123';
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($array);
        die();
    }

}