<?php
session_start();
require_once "./../../config/Database.php";


$db = new Database;
$koneksi = $db->connect();
$Name           = $_POST['name'];
$id             = $_POST['id'];
$sql = "UPDATE categories 
        SET
        name='$Name'
        WHERE id='$id' 
        ";
if ($koneksi->query($sql) === TRUE) {
    echo "updated berhasil";
    header("Location:./../../../view/produk/kategori.php");
}else{
    echo "Update Error: ". $koneksi->error;
}