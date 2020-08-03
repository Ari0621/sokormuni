<?php
require "Stock.php";

if (isset($_POST['simpan'])){
    $product            = implode(",", $_POST['product_id']);
    $ju_stock     = $_POST['stock'];

    $stock = new Stock();

    $result = $stock->insert($product, $ju_stock);
    
    if ($result) {
        header("Location:./../../view/stock/");
    }else{
        echo "Error: ";
    }
}
