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

    public function updat(){
        
    }

    public function delet(){
        
    }
}