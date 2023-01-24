<?php
require_once("./connection.php");

class login extends database{
    public function login($email, $password){
        $db = new database();
        $pdo = $db->connect();
        $requet ="SELECT * FROM `admin` WHERE email ='$email' && pass ='$password'";
        $exe = $pdo->prepare($requet);
        $exe->execute();
        $result = $exe->fetchAll(PDO::FETCH_ASSOC);
        if(!$result){
            header('Location: http://localhost/GlowGuru/login.php');
        }
        else{
            session_start();
            header('Location: http://localhost/GlowGuru/addProduct.php');
            $_SESSION['email']=$email;
            return  $_SESSION['email'];
        }
    }

}
class entrer extends login{
    function entr(){
       if(isset($_POST['email']) && isset($_POST['password'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $admin = new login();
        $admin->login($email, $password);
        
       }
    }
}
$adm = new entrer();
$adm-> entr();
?>