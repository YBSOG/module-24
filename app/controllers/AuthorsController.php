<?php

namespace App\controllers;

use App\core\Controller;

class AuthorsController extends Controller
{
    public function index()
    {
        $this->view->render('authors.phtml', 'template.phtml');

    }
}