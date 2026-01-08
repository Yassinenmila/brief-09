<?php 

namespace app\Controller;
use app\core\Controller;
class Author extends Controller{

    public function index(){
        $this->view('author.views');
    }
}

?>