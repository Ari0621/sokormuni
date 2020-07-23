<?php
session_start();
require "./../../../config/connection.php";

$db              = new Database;
$koneksi         = $db->connect();
$Name            = $_POST['name'];
$category_id     = $_POST['category_id'];
$material        = $_POST['material'];
$color           = $_POST['color'];
$size            = $_POST['size'];
$description     = $_POST['description'];


$sql = "INSERT INTO products SET 
name            ='$Name',
category_id     ='$category_id',
material        ='$material',
color           ='$color',
size            ='$size',
description     ='$description'
";
if ($koneksi->query($sql) === TRUE) {
    echo "data berhasil di simpan";
    header("Location:./../../../view/produk/produk.php");
}else{
    echo "Error: ". $koneksi->error;
}