<?php 

namespace app\Controller;
use app\core\Controller;
use core\Data;

class Login extends Controller{

    private $db;

    public function index(){
        $this->view('login.views');
    }
    
    public function login(){

        $email=$_POST['email'];
        $pass=$_POST['passwd'];
        try{

            $this->db=Data::connect();

            $stmt=$this->db->prepare("SELECT * FROM users WHERE email=:email");
            $stmt->execute([
                ':email'=>$email
            ]);
            $user=$stmt->fetch();

            if(empty($user) || !password_verify($pass,$user['passwd'])){
                echo "ma khdamach";
                header("location:/login");
                exit;
            }
            $_SESSION['user']['id']=$user['id'];
            $_SESSION['user']['name']=$user['name'];
            $_SESSION['user']['email']=$user['email'];
            $_SESSION['user']['role']=$user['roles'];

            if($_SESSION['user']['role']=== "reader"){
                header("Location:/home");
                exit;
            }else if($_SESSION['user']['role']=== "author"){
                header("Location:/author");
                exit;
            }else if($_SESSION['user']['role']=== "admin"){
                header("Location:/dashboard");
                exit;
            }


        }catch(\PDOException $e){
            error_log($e->getmessage());
            return false;
        }   
      
        
    }
    


}

?>