<?php
session_start();
require_once "./../../config/Database.php";

$db       = new Database;
$koneksi  = $db->connect();
$Name     = $_POST['name'];

$sql = "INSERT INTO categories SET name='$Name'";
if ($koneksi->query($sql) === TRUE) {
    echo "data berhasil di simpan";
    header("Location:./../../../view/produk/kategori.php");
}else{
    echo "Error: ". $koneksi->error;
}