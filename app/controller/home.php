<?php 

namespace app\Controller;
use app\core\Controller;
class Home extends Controller{

    public function index(){

        $this->view('home.views');
       
    }
}

?>