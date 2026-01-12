<?php 

namespace app\Controller;
use app\core\Controller;
use core\Data;
class Comment extends Controller{

    private $db;

    

    public function index(){

        $this->db=Data::connect();

        $article_id=$_POST['id'];
        $user_id=$_SESSION['user']['id'];
        $comment=$_POST['comment'];

        $stmt=$this->db->prepare('INSERT INTO comments (id_user,id_article,comment) VALUES (:user_id,:article_id,:comment)');        
        $stmt->execute([
            ':user_id'=>$user_id,
            ':article_id'=>$article_id,
            ':comment'=>$comment
        ]);

        header('Location:/detaille');
        exit;
        
    }
}

?>