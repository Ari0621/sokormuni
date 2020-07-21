<?php
session_start();
require "./../../config/connection.php";
$db = new Database;
$koneksi = $db->connect();
$id = $_GET['id'];


//var_dump($_POST);
$sql = "DELETE FROM colors 
        WHERE id='$id'
        ";
if ($koneksi->query($sql) === TRUE) {
    echo "Delete berhasil";
    header("Location:./../../view/colors.php");
}else{
    echo "Delete Error: ". $koneksi->error;
}