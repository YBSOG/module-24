<?php

namespace App\controllers;

use App\core\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $this->view->render('about.phtml', 'template.phtml');

    }
}