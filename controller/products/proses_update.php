<?php
require "Product.php";

if (isset($_POST['simpan'])){
    $name            = $_POST['name'];
    $category_id     = $_POST['category_id'];
    $material        = implode(",", $_POST['material']);
    $color           = implode(",", $_POST['color']);
    $size            = implode(",", $_POST['size']);
    $description     = $_POST['description'];
    $id              = $_POST['id'];
    $stock           = $_POST['stock'];

    $product = new Product();

    $result = $product->update($id, $name, $category_id, $material, $color, $size, $stock, $description);
    
    if ($result) {
        header("Location:./../../view/products/");
    }else{
        echo "Error: ";
    }
}
