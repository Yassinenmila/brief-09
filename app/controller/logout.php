<?php 
namespace app\Controller;
use app\core\Controller;
use core\Data;
class logout extends Controller {
    public function index(){
        session_destroy();
        header("Location:/login");
        exit;
    }
}