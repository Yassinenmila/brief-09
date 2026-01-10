<?php 

namespace app\Controller;
use app\core\Controller;
use core\Data;
class Update extends Controller{

    private $db;

    public function index(){

        $this->db->prepare ();        


        $this->view('home.views');
    }
}

?>