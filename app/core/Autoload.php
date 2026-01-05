<?php

class Autoload {

    public static function register() {
        spl_autoload_register(function($class) {
            
            $class = str_replace('\\', '/', $class);

            $file = __DIR__ . '/' . $class . '.php';

            if (file_exists($file)) {
                require_once $file;
                return;
            } else {
                echo "Fichier introuvable : $file";
            }
        });
    }
}
