<?php 

namespace app\Controller;
use app\core\Controller;
class Article extends Controller{

    public function index(){
        $this->view('article.views');
    }
}

?>