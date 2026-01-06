<?php
// Afficher les erreurs pour débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../app/core/Autoload.php';

use core\Data;
use core\Router;
session_start();

Data::connect();

$router=new Router();

$router->get('/','home@index');

$router->dispatch();



