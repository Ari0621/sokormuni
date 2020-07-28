<?php
session_start();
require "./../../config/Database.php";


$db = new Database;
$koneksi = $db->connect();
$Name           = $_POST['name'];
$id             = $_POST['id'];
$sql = "UPDATE colors 
        SET
        name     ='$Name'
        WHERE id ='$id' 
        ";
if ($koneksi->query($sql) === TRUE) {
    echo "updated berhasil";
     header("Location:index.php");
}else{
    echo "Update Error: ". $koneksi->error;
}