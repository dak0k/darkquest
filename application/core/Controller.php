<?php

namespace application\core;

use application\core\View;

abstract class Controller
{
    public $route;
    public $view;
    public $model;
    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
        // debug($this->route);
     
    }
    public function loadModel($name)
    {
        $path = 'application\models\\'.ucfirst($name);
        if(class_exists($path))
        {
            return new $path;
        }
        // debug($path);
    }
}