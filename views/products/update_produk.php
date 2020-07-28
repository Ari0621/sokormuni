<?php
session_start();
require "./../../config/Database.php";


$db = new Database;
$koneksi = $db->connect();
$name            = $_POST['name'];
$category_id     = $_POST['category_id'];
$material        = implode(",", $_POST['material']);
$color           = implode(",", $_POST['color']);
$size            = implode(",", $_POST['size']);
$description     = $_POST['description'];
$id             = $_POST['id'];

$sql = "UPDATE products SET  name= '$name',
category_id    = '$category_id',
material       = '$material',
color          = '$color',
size           = '$size',
description    = '$description'
WHERE id             = '$id' 
        ";
if ($koneksi->query($sql) === TRUE) {
    echo "updated berhasil";
    header("index.php");
}else{
    echo "Update Error: ". $koneksi->error;
}