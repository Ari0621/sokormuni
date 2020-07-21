<?php
session_start();
require "./../../config/connection.php";

$db       = new Database;
$koneksi  = $db->connect();
$Name     = $_POST['name'];

$sql = "INSERT INTO categories SET name='$Name'";
if ($koneksi->query($sql) === TRUE) {
    echo "data berhasil di simpan";
    header("Location:./../../view/kategori.php");
}else{
    echo "Error: ". $koneksi->error;
}