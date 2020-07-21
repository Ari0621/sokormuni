<?php
session_start();
require "./../../config/connection.php";

$db              = new Database;
$koneksi         = $db->connect();
$Name            = $_POST['name'];
$description     = $_POST['description'];


$sql = "INSERT INTO sizes SET 
name        ='$Name',
description ='$description'
";
if ($koneksi->query($sql) === TRUE) {
    echo "data berhasil di simpan";
    header("Location:./../../view/sizes.php");
}else{
    echo "Error: ". $koneksi->error;
}