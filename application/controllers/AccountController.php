<?php

namespace application\controllers;

use application\core\Controller;
use application\core\View;

class AccountController extends Controller
{
   /*
      public function before()
      {
        $this->view->layout='custom';
      }
    */
    public function login() 
    {
    
       $this->view->render('Login Page');
    }
    public function register()
    {
        // $this->view->path = 'test/test'; #it needs if page locate in other directory
        // $this->view->layout='custom'; #$this->view->layout needs if you want use own custom layout
        $this->view->render('Register Page');
    }
}