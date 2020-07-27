<?php
require "Product.php";

if (isset($_POST['simpan'])){
    $mame            = $_POST['name'];
    $category_id     = $_POST['category_id'];
    $material        = implode(",", $_POST['material']);
<<<<<<< HEAD
    $color           = implode(",", $_POST['color']);
    $size            = implode(",", $_POST['size']);
=======
    $color           = $_POST['color'];
    $size            = $_POST['size'];
>>>>>>> 4d76fedb2ce451938de7144beaf99bdb1460547d
    $description     = $_POST['description'];

    $product = new Product();

    $result = $product->insert($name, $category_id, $material, $color, $size, $description);
    
    if ($result) {
        header("Location:./../../view/products/");
    }else{
        echo "Error: ";
    }
}
