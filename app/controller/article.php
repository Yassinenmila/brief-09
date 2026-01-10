<?php 

namespace app\Controller;
use app\core\Controller;
use core\Data;
class Article extends Controller{

    private $db;

    public function index(){
        $this->db=Data::connect();

        $stmt=$this->db->prepare("SELECT * FROM categorie");
        $stmt->execute();

        $categories=$stmt->fetchAll();

        $this->view('article.views',['categories' => $categories]);
    }

    public function add(){
        $this->db=Data::connect();
        $text=$_POST['content']?? '';
        $titre=$_POST['titre']?? '';
        $id_author=$_SESSION['user']['id'];
        $categories=$_POST['categories']?? [];
        try{
            $stmt=$this->db->prepare("INSERT INTO article (titre,contenu,id_author) VALUES (:titre,:contenu,:id_author)");
                 $stmt->execute([
                ':titre'=>$titre,
                ':contenu'=>$text,
                ':id_author'=>$id_author
            ]);
            
            $id_article = $this->db->lastInsertId();

            $stmt=$this->db->prepare("INSERT INTO art_type (id_article,id_categorie) VALUES (:id_a,:id_c)");
            foreach($categories as $c){
                $stmt->execute([
                    ':id_a'=>$id_article,
                    ':id_c'=>$c
                ]);
            }
            header("Location:/author");
            exit;
            
        }catch(\PDOException $e){
            error_log($e->getmessage());
            return false;
        }    
    }
}

?>