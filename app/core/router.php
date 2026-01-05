<?php
namespace app\core;

// use app\controller\Home;
// use app\controller\Not_found;

class Router {
    public function dispatch(){

        $uri=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        switch($uri){
            case '':
            case 'home':
                $controller=new Home();
                $controller->index();
                break;
            default:
             $controller= new Not_found();

            break;
        }
    }

}

?>