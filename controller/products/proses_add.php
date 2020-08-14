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
        $coba1 = $fotobaru[1];
        $coba2  = $fotobaru[2];  

        $product = new Product();
        $last_id = $product->insert($name, $category_id, $material, $color, $size, $stock, $description, $coba, $coba1, $coba2, $harga);
        header("Location:./../../views/products/");			
    }
    else{
        echo "Gambar tidak ada";
    }

        // $product = new Product();

        // $last_id = $product->insert($name, $category_id, $material, $color, $size, $stock, $description, $fotobaru, $fotobaru1, $fotobaru2);

        // }else{
        //     echo "Maaf, Gambar gagal untuk di upload.";
        // }
    

    
    //echo $last_id;
    
    // $detail_product = new Detail();

    // $result = $detail_product->insert($last_id, $name, $stock);




    // if ($last_id) {
    //     header("Location:./../../views/products/");
    // }else{
    //     echo "Error: ";
    // }
}