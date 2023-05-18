<?php

namespace app\core;

class View
{
    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
        // debug($this->path);
    }

    public function render($title, $vars = [])  : void
    {
       
        extract($vars);
        $path = 'app/views/'.$this->path.'.php';
        // debug($vars);
        #it needs if page locate in other directory
        if(file_exists($path)){
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'app/views/layouts/'.$this->layout.'.php';
        }
        // else{
        //     echo "View Not Found".$this->path;
        // }
    }
    public function redirect($url)
    {
        header('location: '.$url);
        exit;
    }
    public static function errorCode($code)
    {
        http_response_code($code);
        $path = 'app/views/errors/'.$code.'.php';
        if (file_exists($path)) {
            require $path;
        }
        
        exit;
    }



}