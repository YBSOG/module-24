<?php

namespace App\controllers;

use App\core\Controller;

class PostController extends Controller
{
    public function index(){
        $this -> view -> render("posts/index.phtml", "template.phtml");
    }
}