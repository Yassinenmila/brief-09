<?php
namespace model;

use model\Reader;

class Author extends User{

    public function __construct(){
        parent::__construct();
    }

    public function add($titre,$text,$id){
        try{
            $stmt=$this->db->prepare("INSERT INTO article (titre,contenu,id_author) VALUES (:titre,:contenu,:id_author)");
            return $stmt->execute([
                ':titre'=>$titre,
                ':contenu'=>$text,
                ':id_author'=>$id
            ]);
        }catch(\PDOException $e){
            error_log($e->getmessage());
            return false;
        }    
    }

    public function updat($titre,$contenu,$id){
        try{
            $stmt=$this->db->prepare("UPDATE article SET titre=:titre, contenu=:contenu WHERE id=:id ");
            return $stmt->execute([
                ':titre'=>$titre,
                ':contenu'=>$text,
                ':id'=>$id
            ]);

        }catch(\PDOException $e){
            error_log($e->getmessage());
            return false;
        }
    }

    public function delet($id){
        try{
            $stmt=$this->db->prepare("DELETE FROM article WHERE id=:id");
            return $stmt->execute([
                ':id'=>$id
            ]);
            
        }catch(\PDOException $e){
            error_log($e->getmessage());
            return false;
        }
    }
}