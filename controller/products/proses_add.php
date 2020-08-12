<?php
require "Product.php";
require "Detail_product.php";

if (isset($_POST['simpan'])){
    $name            = $_POST['name'];
    $category_id     = $_POST['category_id'];
    $material        = implode(",", $_POST['material']);
    $color           = implode(",", $_POST['color']);
    $size            = implode(",", $_POST['size']);
    $description     = $_POST['description'];
    $stock           = $_POST['stock'];
    $foto            = $_FILES['foto']['name'];
    $tmp             = $_FILES['foto']['tmp_name'];

    $fotobaru = date('dmYHis').$foto;
    
    $path = "./../../Image/".$fotobaru;


    if(move_uploaded_file($tmp, $path)){

        $product = new Product();

        $last_id = $product->insert($name, $category_id, $material, $color, $size, $stock, $description, $fotobaru);

        }else{
            echo "Maaf, Gambar gagal untuk di upload.";
        }
    

    
    //echo $last_id;
    
    // $detail_product = new Detail();

    // $result = $detail_product->insert($last_id, $name, $stock);




    if ($last_id) {
        header("Location:./../../views/products/");
    }else{
        echo "Error: ";
    }
}