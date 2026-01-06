<?php

abstract class User{

    private $db;

    public function __construct(){
        $this->db=Data::connect();
    }

    public function login($email,$pwd){

        $stmt=$this->db->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->execute([
            ':email'=>$email
        ]);
        $user=$stmt->fetch();

        if(!$user || !password_verify($pwd,$user['passwd'])){
            return false;
        }
        return $user;
        
    }

    public function signup($name,$email,$pwd){
        $stmt=$this->db->prepare("SELECT * FROM users WHERE email=:email AND passwd=:passwd");
        $stmt->execute([
            ':email'=>$email,
            ':passwd'=>$pwd
        ]);
        $user=$stmt->fetch();
        if(!empty($user)){
            return false;
        }
        $stmt=$this->db->prepare("INSERT INTO users (name,email,passwd,roles)VALUES(:name,:email,:passwd,:roles)");
        $stmt->execute([
            ':name'=>$name,
            ':email'=>$email,
            ':passwd'=>$pwd,
            ':roles'=>'reader'
        ]);
        $user=$stmt->fetch();
        return $user;
    }

    public function logout(){
        session_destroy();
        header("Location:/login");
        exit;
    }

} 