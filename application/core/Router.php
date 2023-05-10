<?php

namespace application\core;


class Router 
{

    protected $routes = [];
    protected $params = [];


    public function __construct()
    {
       $arr = require 'application/config/routes.php';
       foreach($arr as $key => $val)
       {
        $this -> add($key, $val);
       }
    //    debug($arr);
    }  
    
    public function add($route, $params)
    {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    public function match()
    {
        
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function run()
    {
       if( $this->match())
       {
            $path= 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
            if(class_exists($path))
            {
                //Checking function
                $action = $this->params['action'].'Action';
                if(method_exists($path, $action))
                {
                    $controller = new $path($this->params);
                    $controller->$action();
                }
                else{
                    echo "Method Not Found ".$action;
                }
            }
            else{
                echo "Controller Not Found ".$path;
            }
        
       }
       else{
        echo "Route Not Found";
       }
        // echo 'start';
    }


}