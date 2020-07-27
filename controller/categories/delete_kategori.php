<?php
session_start();
require_once "./../../config/Database.php";
$db = new Database;
$koneksi = $db->connect();
$id = $_GET['id'];



$sql = "DELETE FROM categories 
        WHERE id='$id'
        ";
if ($koneksi->query($sql) === TRUE) {
    echo "Delete berhasil";
    header("Location:./../../../view/produk/kategori.php");
}else{
    echo "Delete Error: ". $koneksi->error;
}