<?php 

namespace app\Controller;
use app\core\Controller;
use core\Data;
class Like extends Controller{

    private $db;

    public function index(){

        $this->db=Data::connect();

        $article_id=$_POST['id'];
        $user_id=$_SESSION['user']['id'];
        

        $stmt=$this->db->prepare('INSERT INTO likes (id_user,id_article) VALUES (:user_id,:article_id)');        
        $stmt->execute([
            ':user_id'=>$user_id,
            ':article_id'=>$article_id
        ]);

        header('Location:/detaille');
        exit;
        
    }
}

?>