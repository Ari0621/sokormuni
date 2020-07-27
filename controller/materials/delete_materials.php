<?php
session_start();
require_once "./../../config/Database.php";
$db = new Database;
$koneksi = $db->connect();
$id = $_GET['id'];



$sql = "DELETE FROM materials 
        WHERE id='$id'
        ";
if ($koneksi->query($sql) === TRUE) {
    echo "Delete berhasil";
    header("Location:./../../../view/produk/materials.php");
}else{
    echo "Delete Error: ". $koneksi->error;
}