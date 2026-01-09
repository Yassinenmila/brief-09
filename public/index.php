<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../app/core/Autoload.php';

use core\Data;
use core\Router;

session_start();

$router=new Router();
if(isset($_SESSION['user'])){

    $router->get('/','home@index');
    $router->get('/home','home@index');
    $router->get('/profil','profil@index');
    $router->get('/author','author@index');
    $router->get('/article','article@index');
    $router->post('/article','article@add');
    
}else {
    $router->get('/signup','signup@index');
    $router->get('/login','login@index');
    $router->post('/login','login@login');
    $router->post('/signup','signup@signup');
}


$router->dispatch();


