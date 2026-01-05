<?php


        spl_autoload_register(function($class) {
            $prefix='App\\'; 
            $classpath = str_replace('App\\', '/', $class). '.php';

            $file = __DIR__ . '/' . $classpath;

            if (file_exists($file)) {
                require_once $file;
            } else {
                echo "Fichier introuvable : $file";
            }
        });
