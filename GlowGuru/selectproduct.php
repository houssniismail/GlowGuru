<?php
require_once("./loginLog.php");
$adm = new entrer();
$log = $adm-> entr();


session_start();

if(!$_SESSION['email']){
    header("Location: http://localhost/GlowGuru/index.php");
}

if(isset($_POST['logout'])){
    session_destroy();
    header("Location: http://localhost/GlowGuru/index.php");
}
require_once('./reqSelect.php');


$product = new select();
$select = $product->afficher();
// var_dump($select);

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
<body>

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
<a href="./addProduct.php" class="px-6 py-3 text-blue-100 relative no-underline bg-blue-500 rounded hover:bg-blue-600 hover:underline hover:text-blue-200" style="position: relative; top: 30px;">Add</a>
<table class="table_of_product table-auto ml-auto mr-auto relative" style="    position: relative; top: 50px;">
    <thead class="bg-white border-b md:w-32 lg:w-48" >
        <tr>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">id</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">image</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">name</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">description</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">prix</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">quentete</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($select as $elements):?>
        <tr class="bg-gray-100 border-b md:w-32 lg:w-48">
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo $elements['id'] ;?></td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><img src="<?php echo $elements['image'] ; ?>" alt="" class=" w-10"></td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php echo $elements['name'] ; ?></td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php echo $elements['description'] ; ?></td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php echo $elements['prix'] ; ?></td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php echo $elements['quentite'] ; ?></td>
            <td> 
                <form method="POST" action="./deleteProduct.php">
                    <input type="hidden" name="id" value="<?php echo $elements['id']; ?>" >
                   <button type="submit" name="submit">
                    delete
                   </button>
                </form>
                <form method="POST" action="./selectOneProduct.php">
                  <input type="hidden" name="id" value="<?php echo $elements['id'] ;?>">
                  <button>update</button>
                </form>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</body>
</html>