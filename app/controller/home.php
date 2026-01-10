<?php 

namespace app\Controller;
use app\core\Controller;

use core\Data;

class Home extends Controller{

    private $db;

    public function index(){
    
        $this->db=Data::connect();

        $sql="SELECT 
    a.id AS article_id,
    a.titre,
    a.contenu,
    a.create_at AS date,
    u.name AS author,
    COUNT(DISTINCT l.id_user) AS total_likes,
    COUNT(DISTINCT c.id_user) AS total_comments,
    STRING_AGG(DISTINCT cat.name, ', ') AS categories
    FROM article a
    INNER JOIN users u ON a.id_author = u.id
    LEFT JOIN likes l ON a.id = l.id_article
    LEFT JOIN comments c ON a.id = c.id_article
    LEFT JOIN art_type at ON a.id = at.id_article
    LEFT JOIN categorie cat ON at.id_categorie = cat.id
    GROUP BY a.id, a.titre, a.contenu, u.name
    ORDER BY a.id DESC;";

        $stmt=$this->db->query($sql);

        $article=$stmt->fetchAll();
        
        $this->view('home.views',['article'=>$article]);
    }

}

?>