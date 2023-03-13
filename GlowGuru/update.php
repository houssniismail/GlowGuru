<?php
require_once("./connection.php");

class update extends database{

    public function update_product($value1, $value2, $value3, $value4,$value5,$id){
       $data = new database();
       $prod=$data->connect();
       $query = "UPDATE `products` SET `image`='$value1',`name`='$value2',`description`='$value3',`prix`='$value4',`quentite`='$value5' WHERE `id`=$id";
       $exe = $prod->prepare($query);
       $exe->execute();
    }
}


class confermUpdate extends update{
    function addPic(){
        if(isset($_FILES['value1'])){
            $picname=$_FILES['value1']['name'];
            $picsize=$_FILES['value1']['size'];
            $pictmpname=$_FILES['value1']['tmp_name'];
        
            if($_FILES['value1']['error']===0){
                    $img_ex = pathinfo($picname, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
        
                    $allowed_exs=array("jpg","jpeg","png");
        
                    if(in_array($img_ex_lc,$allowed_exs)){
                        $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
                        $img_upload_path='./styles/imges/'.$new_img_name;
                        move_uploaded_file($pictmpname,$img_upload_path);
                        return $img_upload_path;
                    }else{
                        die("error");
                    }
                    
            }else{
                    die("error");
                }     
        }
    }

    public function updatePro(){
      if(isset($_POST['id'])){
        if(isset($_FILES['value1'])&&$_FILES['value1']['error']===0){
        $id=$_POST['id'];
        $value1 = $this->addPic();
        $value2 = $_POST["value2"];
        $value3 = $_POST["value3"];
        $value4 = $_POST["value4"];
        $value5 = $_POST["value5"];
        $update = new update();
        $update->update_product($value1,$value2,$value3,$value4,$value5,$id);
        header("Location: http://localhost/GlowGuru/selectproduct.php");
        }
        }
      }
}

$trmUpdate = new confermUpdate();
$trmUpdate->updatePro();

var_dump($_POST['id']);
?>

