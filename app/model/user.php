<?php
namespace model;
abstract class User{

    private $db;

    public function __construct(){
        $this->db=Data::connect();
    }

   

    

    public function logout(){
        session_destroy();
        header("Location:/login");
        exit;
    }

} 