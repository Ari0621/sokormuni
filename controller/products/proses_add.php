<?php
require "Product.php";

if (isset($_POST['simpan'])){
    $mame            = $_POST['name'];
    $category_id     = $_POST['category_id'];
    $material        = implode(",", $_POST['material']);
    $color           = implode(",", $_POST['color']);
    $size            = implode(",", $_POST['size']);
    $description     = $_POST['description'];

    $product = new Product();

    $result = $product->insert($name, $category_id, $material, $color, $size, $description);
    
    if ($result) {
        header("Location:./../../view/products/");
    }else{
        echo "Error: ";
    }
}
