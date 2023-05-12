<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{
   /*
      public function before()
       {
        $this->view->layout='custom';
      }
    */
    public function loginAction()
    {
       // $this->view->redirect(''); //For redirecting
        $this->view->render('Login Page');
    }
    public function registerAction()
    {
        // $this->view->path = 'test/test'; #it needs if page locate in other directory
        // $this->view->layout='custom'; #$this->view->layout needs if you want use own custom layout
        $this->view->render('Register Page');
    }
}