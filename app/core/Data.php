<?php 
namespace core;
use PDO;
use PDOException;
class Data {

    private static $pdo=null;

    public static function connect(){
        if (self::$pdo===null){
            $host="localhost";
            $pass="Yassine34.";
            $db_name="blogos";
            $port="5432";
            $user="yassine"; 

            $conn="pgsql:host=$host;port=$port;dbname=$db_name";

            try {
                self::$pdo=new PDO($conn,$user,$pass,[
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]);


            }catch(PDOException $e){
                die("erreur de connection:".$e->getMessage());
            }

        }
        return self::$pdo;
    }
}