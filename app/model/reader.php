<?php
namespace model;

use model\User;
class Reader extends User {

    public function __construct(){
        parent::__construct();
    }

    public function like($id_artcl,$id_user){
        try{
            $stmt=$this->db->prepare("INSERT INTO likes (id_user,id_article) VALUES (:id_user,:id_article)");
            return $stmt->execute([
                ":id_user"=>$id_user,
                ":id_article"=>$id_artcl
            ]);
        }catch(\PDOException $e){
            error_log($e->getmessage());
            return false;
        }
    }

    public static function comment ($id_artcl,$id_user,$comment){
        try{
           $stmt=$this->db>prepare("INSERT INTO comments (id_user,id_article,comment)VALUES(:id_user,:id_article,:comment)");
           return $stmt->execute([
              ":id_user"=>$id_user,
              ":id_article"=>$id_artcl,
              ":comment"=>$comment
          ]);
        }catch(\PDOException $e){
            error_log($e->getmessage());
            return false;
        }  
    }

}