<?php
namespace core;

class Router {

    private array $routes=[];

    public function __construct(){
    }
    
    public function get ($uri,$action){
        $this->routes['GET'][$uri]=$action;
    }
    
    public function post ($uri,$action){
        $this->routes['POST'][$uri]=$action;
    }

    public function dispatch(){

        $uri=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        $method=$_SERVER['REQUEST_METHOD'];

        if(isset($this->routes[$method][$uri])){
            
            [$ctrl,$methd]=explode('@',$this->routes[$method][$uri]);
            
            $ctrlclass="app\\controller\\$ctrl";
            
            if(class_exists($ctrlclass) && method_exists($ctrlclass,$methd)){
                $controller=new $ctrlclass();
                $controller->$methd();
                return;
            }else{
                $this->view404();
            }
            
            
        }else{
            $this->view404();
        }
    }

    private function view404(){
        http_response_code(404);

        require_once __DIR__."/../views/pages/404.views.php";
    }
}
?>