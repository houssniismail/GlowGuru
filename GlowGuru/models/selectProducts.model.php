<?php
require_once('../database/connection.php');

class select extends database{
    public function afficher(){
        $data = new database();
        $pdo = $data->connect();
        $requet = "SELECT * FROM `products`";
        $exe = $pdo->prepare($requet);
        $exe->execute();
        $result = $exe->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($result);
        return $result;
        
    }
}
?>