<?php
  spl_autoload_register(function($class){

            // __DIR__ = /var/www/brief-09/src/core
            // On remonte vers src
            $baseDir = dirname(__DIR__) . '/';  // /var/www/brief-09/src/

            if(strpos($class, 'app\\') === 0){
                $class = substr($class, 4); // enlève 'app\' du début
            }
            // Transformer le namespace en chemin
            $file = $baseDir . str_replace('\\','/',$class) . '.php';

            if(file_exists($file)){
                require_once $file;
            } else {
                die("❌ Fichier introuvable : $file");
            }
        });  