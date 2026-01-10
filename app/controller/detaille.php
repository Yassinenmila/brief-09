<?php 
namespace app\Controller;
use app\core\Controller;

class Detaille extends Controller{

    public function index(){
        $this->view('detaille.views');
    }
}

?>