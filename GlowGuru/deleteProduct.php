<?php
require_once("./connection.php");

class delete extends database{
    public function deleting($id){
        $db = new database();
        $fun = $db->connect();
        $requet = "DELETE FROM `products` WHERE id = $id";
        $exe = $fun->prepare($requet);
        $exe->execute();
    }
}

class deleconferm extends delete{
    public function confermer(){
      if(isset($_POST["id"])){
        $id = $_POST["id"];
        $del = new delete();
        $del->deleting($id);

        header("Location: http://localhost/GlowGuru/selectproduct.php");
      }
    }
  }
  $diliting = new deleconferm();
  $diliting->confermer();
?>