<?php

namespace App\controllers;

use App\core\Controller;

class ContactsController extends Controller
{
    public function index()
    {
        $this->view->render('contacts.phtml', 'template.phtml');

    }
}