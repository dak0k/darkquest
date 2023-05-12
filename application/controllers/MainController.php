<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $vars = [
                'name' => 'User',
                'age' => 10,
                'array' => [1,4,5,3],
        ];
        $this->view->render('Main Page', $vars);
    }
  
}