<?php

namespace app\core;

class autoloader {
    
    public static function register (){

        sql_autoloader_register(function($class){

            $class=str_replace('app\\','',$class);

            $class=str_replace('\\','/',$class);

            $file = __DIR__ . '/../' . $class . '.php';

            if(file_exists($file)){
                require_once $file;
            }
        });
    }
}


?>