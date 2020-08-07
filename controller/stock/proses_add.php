<?php
require "stock.php";

if (isset($_POST['simpan'])){
    $date            = $_POST['ttl'];
    $id              = $_POST['id'];
    $category_id     = $_POST['id'];
    $total           = $_POST['total'];
    $coba            = $_POST['coba'];
    $stock           = $coba+$total;

    $hasil = new Stock();

    $result = $hasil->insert($id, $date, $stock);
    
    require "Update_produk.php";
    $product = new Coba();

    $result = $product->update($id, $stock);

    if ($result) {
        header("Location:./../../view/products/stock.php");
    }else{
        echo "Error: ";
    }
}
