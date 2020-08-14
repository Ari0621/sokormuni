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
    $harga           = $_POST['harga'];
    $jumlah = count($_FILES['foto']['name']);
    if ($jumlah > 0) {
        $fotobaru = array();
        for ($i=0; $i < $jumlah; $i++) { 
            $file_name = $_FILES['foto']['name'][$i];
            $tmp_name = $_FILES['foto']['tmp_name'][$i];
            $baru = date('dmYHis').$file_name;				
            move_uploaded_file($tmp_name, "./../../Image/".$baru);
            $fotobaru[$i] = $baru; 								
        }
        $coba  = $fotobaru[0]; 
        $coba1 = $fotobaru[2];
        $coba2  = $fotobaru[2];  

        $product = new Product();
        $last_id = $product->insert($name, $category_id, $material, $color, $size, $stock, $description, $coba, $coba1, $coba2, $harga);
        header("Location:./../../views/products/");			
    }
    else{
        echo "Gambar tidak ada";
    }
}
