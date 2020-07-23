<?php
session_start();
require "./../../../config/connection.php";


$db = new Database;
$koneksi        = $db->connect();
$Name           = $_POST['name'];
$category_id    = $_POST['category_id'];
$material       = $_POST['material'];
$color          = $_POST['color'];
$size           = $_POST['size'];
$description    = $_POST['description'];
$id             = $_POST['id'];
$sql = "UPDATE products 
        SET
        name            ='$Name',
        category_id     ='$category_id',
        material        ='$material',
        color           ='$color',
        size            ='$size',
        description     ='$description'
        WHERE id        ='$id' 
        ";
if ($koneksi->query($sql) === TRUE) {
    echo "updated berhasil";
    header("Location:./../../../view/produk/produk.php");
}else{
    echo "Update Error: ". $koneksi->error;
}