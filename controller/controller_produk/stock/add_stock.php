<?php
session_start();
require "./../../../config/connection.php";

$db              = new Database;
$koneksi         = $db->connect();
$Name            = $_POST['name'];
$description     = $_POST['description'];


$sql = "INSERT INTO add_stock SET 
name        ='$Name',
description ='$description'
";
if ($koneksi->query($sql) === TRUE) {
    echo "data berhasil di simpan";
    header("Location:./../../../view/produk/stock.php");
}else{
    echo "Error: ". $koneksi->error;
}