<?php 

namespace app\Controller;
use app\core\Controller;
use core\Data;
class Author extends Controller{

    private $db;

    public function index(){

        $this->db=Data::connect();

        $stmt=$this->db->prepare("SELECT 
            a.id AS article_id,
            a.titre,
            a.contenu,
            a.create_at AS date,
            (
                SELECT COUNT(*)
                FROM article
                WHERE id_author = :id_user
            ) AS total_art,
            COUNT(DISTINCT l.id_user) AS total_likes,
            COUNT(DISTINCT c.id_user) AS total_comments
            FROM article a
            LEFT JOIN likes l ON a.id = l.id_article
            LEFT JOIN comments c ON a.id = c.id_article
            WHERE a.id_author = :id_user
            GROUP BY a.id, a.titre, a.contenu
            ORDER BY a.id DESC;
        ");

        $stmt->execute([
            ':id_user'=>$_SESSION['user']['id']
        ]);  
        
        $data=$stmt->fetchAll();

        $this->view('author.views',['data'=>$data]);
    }
}

?>