<?php

namespace App\controllers;

use App\core\Controller;


class HomeController extends Controller
{
    public function index()
    {
        $this->view->render('homepage.phtml', 'template.phtml');

    }
}