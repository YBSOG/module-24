<?php


namespace App\controllers;

use App\core\Controller;


class ErrorController extends Controller
{
    public function index()
    {
        $this->view->render(null , '..\error.phtml');
    }
}