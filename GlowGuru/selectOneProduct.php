<?php

require_once("./loginLog.php");
$adm = new entrer();
$log = $adm-> entr();
// var_dump($log);

session_start();

if(!$_SESSION['email']){
    header("Location: http://localhost/GlowGuru/index.php");
}

require_once('./connection.php');
class afficher extends database{
  
      public function afficherProduct($id){
        $data = new database();
        $pdo=$data->connect();
        $query = "SELECT * FROM `products` WHERE id=$id";
        $exe = $pdo->prepare($query);
        $exe->execute();
        $product = $exe->fetchAll(PDO::FETCH_ASSOC);
        var_dump($product);
        return $product;
      }
}
class productAficher extends afficher{
    public function confr(){
       if(isset($_POST['id'])){
        $id = $_POST['id'];
        $product = new afficher();
        $result = $product->afficherProduct($id);
        return $result;
    } 
    }
    }
    $aff = new productAficher();
    $products = $aff->confr();
    var_dump($products);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/main.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class=" bg-slate-700">
<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="#" class="flex">
      <svg class="mr-3 h-10" viewBox="0 0 52 72" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.87695 53H28.7791C41.5357 53 51.877 42.7025 51.877 30H24.9748C12.2182 30 1.87695 40.2975 1.87695 53Z" fill="#76A9FA"/><path d="M0.000409561 32.1646L0.000409561 66.4111C12.8618 66.4111 23.2881 55.9849 23.2881 43.1235L23.2881 8.87689C10.9966 8.98066 1.39567 19.5573 0.000409561 32.1646Z" fill="#A4CAFE"/><path d="M50.877 5H23.9748C11.2182 5 0.876953 15.2975 0.876953 28H27.7791C40.5357 28 50.877 17.7025 50.877 5Z" fill="#1C64F2"/></svg>
        <span class="self-center text-lg font-semibold whitespace-nowrap dark:text-white">FlowBite</span>
    </a>
    <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
      <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
        <li>
          <a href="./selectproduct.php" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">show product</a>
        </li>
        <li>
          <a href="./addProduct.php" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">add one product</a>
        </li>
        <li>
          <a href="./addPlusProduct.php" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">add products</a>
        </li>
        <li> 
        <form class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" action="" method="POST">
        <button name="logout">logout</button>
         </form>
        </li>
        <li>
          <a href="./Statistique.php" class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">statistique</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <center>
       <h1 style="font-size: 30px;">add one product</h1> 
    </center>
    
    <form method="POST" action="./update.php">
        <?php foreach($products as $elements):?>
    <div class="relative ">
       <div class="w-96 h-10 relative rounded-3xl ml-auto mr-auto">
             <input class="w-96 h-10 relative rounded-3xl ml-auto mr-auto" placeholder="name ..." name="value1" type="file" required>
       </div>
       <br>
       <div class="w-96 h-10 relative rounded-3xl ml-auto mr-auto">
         <input class="w-96 h-10 relative rounded-3xl ml-auto mr-auto" placeholder="image ..." name="value2" type="text" value="<?php echo $elements['name']?>" required>   
       </div>
        <br>
       <div class="w-96 h-10 relative rounded-3xl ml-auto mr-auto">
            <input class="w-96 h-10 relative rounded-3xl ml-auto mr-auto" placeholder="description ..." name="value3" type="text" value="<?php echo $elements['description']?>" required>
       </div>
       <br>
       <div class="w-96 h-10 relative rounded-3xl ml-auto mr-auto">
            <input class="w-96 h-10 relative rounded-3xl ml-auto mr-auto" placeholder="prix ..." name="value4" type="text" value="<?php echo $elements['prix']?>"  required>
       </div>
       <br>
       <div class="w-96 h-10 relative rounded-3xl ml-auto mr-auto">
            <input class="w-96 h-10 relative rounded-3xl ml-auto mr-auto" placeholder="quentite ..." name="value5" type="text" value="<?php echo $elements['quentite']?>" required>
       </div>
       <br>
       <div class="w-96 h-10 relative rounded-3xl ml-auto mr-auto">
            <input class="w-96 h-10 relative rounded-3xl ml-auto mr-auto" placeholder="quentite ..." name="id" type="hidden" value="<?php echo $elements['id']?>" required>
       </div>
    </div>

       <center>
       <button class=" bg-blue-700 w-96" style=" height: 40px; border-radius: 10px;" type="submit" name="id">update</button>
       </center>
       <?php endforeach;?>
</form>
</body>
</html>