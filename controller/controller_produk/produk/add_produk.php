<?php
session_start();
require "./../../../config/connection.php";

$db              = new Database;
$koneksi         = $db->connect();
$Name            = $_POST['name'];



$sql = "INSERT INTO products SET 
name        ='$Name'
";
if ($koneksi->query($sql) === TRUE) {
    echo "data berhasil di simpan";
    header("Location:./../../../view/produk/produk.php");
}else{
    echo "Error: ". $koneksi->error;
}