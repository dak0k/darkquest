<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        echo 'Main';
    }
    public function contactAction()
    {
        echo 'Contact';
    }
}