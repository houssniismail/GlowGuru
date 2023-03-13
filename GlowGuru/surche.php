<?php
require_once("./connection.php");

class surche extends database{
    public function serche(){
    $newSurche = new database();
    $pdo = $newSurche->connect();
    $requet = "SELECT * FROM products WHERE name LIKE '%ismail%'";

    $exe = $pdo->prepare($requet);

    $exe->execute();

    $product = $exe->fetchAll(PDO::FETCH_ASSOC);
    

   
    var_dump($product);
    }
}
$serche = new surche();
$serche->serche();
?>