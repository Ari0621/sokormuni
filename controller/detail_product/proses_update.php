<?php
require "Detail_product.php";

if (isset($_POST['simpan'])){
    $product    = $_POST['name'];
    $ju_stock   = $_POST['product_id'];
    $id         = $_POST['id'];

    $stock = new Detail();

    $result = $stock->update($id, $product, $ju_stock);
    
    if ($result) {
        header("Location:./../../view/detail_product/");
    }else{
        echo "Error: ";
    }
}
