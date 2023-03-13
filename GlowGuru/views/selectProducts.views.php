<?php
require_once('../controller/selectProducts.controller.php');

$product = new selectProductController();
$products=$product->selectingProduct();
// var_dump($products);
?>