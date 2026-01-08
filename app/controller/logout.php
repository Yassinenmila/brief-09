<?php 

use core\Controller;
class logout extends Controller {
    public function index(){
        session_destroy();
        header("Location:/login");
        exit;
    }
}