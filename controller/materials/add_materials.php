<?php
session_start();
require_once "./../../config/Database.php";

$db              = new Database;
$koneksi         = $db->connect();
$Name            = $_POST['name'];
$description     = $_POST['description'];


$sql = "INSERT INTO materials SET 
name        ='$Name',
description ='$description'
";
if ($koneksi->query($sql) === TRUE) {
    echo "data berhasil di simpan";
    header("Location:./../../../view/produk/materials.php");
}else{
    echo "Error: ". $koneksi->error;
}