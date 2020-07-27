<?php
require "Product.php";

if (isset($_POST['simpan'])){
    $mame            = $_POST['name'];
    $category_id     = $_POST['category_id'];
    $material        = implode(",", $_POST['material']);
    $color           = $_POST['color'];
    $size            = $_POST['size'];
    $description     = $_POST['description'];

    $product = new Product();

    $result = $product->insert($name, $category_id, $material, $color, $size, $description);
    
    if ($result) {
        header("Location:./../../view/products/");
    }else{
        echo "Error: ";
    }
}
