<?php
require_once('../models/selectProducts.model.php');

class selectProductController extends select{
    public function selectingProduct(){
        $product = new select();
        $select = $product->afficher();
        return $select;
    }
}
?>