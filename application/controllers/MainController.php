<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;
class MainController extends Controller
{
    public function indexAction()
    {
        // $vars = [
        //         'name' => 'User',
        //         'age' => 10,
        //         'array' => [1,4,5,3],
        // ];

        $db = new Db;

        $params = [
            'id' =>1,
        ];
   
        $data = $db->column('SELECT name FROM users WHERE id = :id', $params);
        debug($data);
        $this->view->render('Main Page'); //, $vars
    }
  
}