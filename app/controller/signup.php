<?php 

namespace app\Controller;
use app\core\Controller;
use core\Data;
class Signup extends Controller{

    private $db;

    public function index(){
        $this->view('signup.views');
    }

    public function signup(){
        
        try{    

            $this->db=Data::connect();

            $email=$_POST['email'] ?? '';
            $name=$_POST['name'] ?? '';
            $pass=$_POST['passwd'] ?? '';
            $conf=$_POST['pswd_conf'] ?? '';

            if(!$email || !$name || !$pass || !$conf){
                echo "veiller remplir les champs !!!";
                return;
            }
            if($pass!==$conf){
                echo "password in valide !!!!";
                return;
            }
            $stmt=$this->db->prepare("SELECT * FROM users WHERE email=:email AND passwd=:passwd");
            $stmt->execute([
                ':email'=>$email,
                ':passwd'=>$pass
            ]);
            $user=$stmt->fetch();
            if(!empty($user)){
                echo "cette utilisateur deja exist !!!";
            }
            $stmt=$this->db->prepare("INSERT INTO users (name,email,passwd)VALUES(:name,:email,:passwd)");
            $stmt->execute([
                ':name'=>$name,
                ':email'=>$email,
                ':passwd'=>password_hash($pass,PASSWORD_DEFAULT)
            ]);
            $user=$stmt->fetch();
            header("Location:/login");
            exit;
        }catch(\PDOException $e){
            error_log($e->getmessage());
            return false;
        }    
    }
}

?>