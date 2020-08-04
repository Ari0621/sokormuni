<?php
require "Detail_product.php";

if (isset($_POST['simpan'])){
    $product      = $_POST['product_id'];
    $ju_stock     = $_POST['stock'];

    $stock = new Detail();

    $result = $stock->insert($product, $ju_stock);
    
    if ($result) {
        header("Location:./../../view/stock/");
    }else{
        echo "Error: ";
    }
}
