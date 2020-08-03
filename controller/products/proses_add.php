<?php
require "Product.php";

if (isset($_POST['simpan'])){
    $name            = $_POST['name'];
    $category_id     = $_POST['category_id'];
    $material        = implode(",", $_POST['material']);
    $color           = implode(",", $_POST['color']);
    $size            = implode(",", $_POST['size']);
    $description     = $_POST['description'];

    $product = new Product();

    $last_id = $product->insert($name, $category_id, $material, $color, $size, $description);
    echo $last_id;
    // if ($result) {
    //     header("Location:./../../view/products/");
    // }else{
    //     echo "Error: ";
    // }
}
