<?php 
namespace app\Controller;
use app\core\Controller;
use core\Data;

class Detaille extends Controller{

    private $db;

    public function index(){

        $this->db=Data::connect();

        $id=$_POST['id'];
    
        $stmt=$this->db->prepare("SELECT 
        a.*,
        u.name as author
        FROM article a 
        JOIN users u ON a.id_author=u.id
        WHERE a.id=:id
        ");
        $stmt->execute([
            ':id'=>$id        
        ]);
        $data=$stmt->fetch();

        $stmt=$this->db->prepare("SELECT COUNT(id_user)as total_likes FROM likes WHERE id_article=:id GROUP BY id_article");
        $stmt->execute([
            ':id'=>$id
        ]);

        $total_likes = $stmt->fetch();

        $stmt=$this->db->prepare("SELECT 
        c.comment AS comment,
        c.date_comment,
        u.name AS owner
        FROM comments c
        JOIN users u ON c.id_user = u.id
        WHERE c.id_article = :id
        ORDER BY c.date_comment DESC");
        $stmt->execute([
            ':id'=>$id
        ]);

        $comments=$stmt->fetchAll();


        $this->view('detaille.views',[
            'data'=> $data,
            'total_likes'=>$total_likes,
            'comments'=>$comments,
            'id'=>$id
        ]);
    }

    public function add_com(){

        $this->db=Data::connect();

        $article_id=$_POST['id'];
        $user_id=$_SESSION['user']['id'];
        
        



    }
}

?>