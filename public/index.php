<?php
require_once __DIR__ . '/../app/core/Autoload.php';

use App\Core\Router;

session_start();

$router=new Router();

$router->get('/','home@index');

$router->dispatch();



