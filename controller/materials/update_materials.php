<?php
session_start();
require "./../../config/connection.php";


$db = new Database;
$koneksi = $db->connect();
$Name           = $_POST['name'];
$description       = $_POST['description'];
$id             = $_POST['id'];
$sql = "UPDATE materials 
        SET
        name     ='$Name',
        description ='$description'
        WHERE id ='$id' 
        ";
if ($koneksi->query($sql) === TRUE) {
    echo "updated berhasil";
    header("Location:./../../view/materials.php");
}else{
    echo "Update Error: ". $koneksi->error;
}