<?php
session_start();
require "connection.php";

$db = new Database;

$koneksi = $db->connect();

$sql = "CREATE DATABASE sokormuni";
if ($koneksi->query($sql) === TRUE) {
    echo "Database berhasil di buat";
}else{
    echo "database error " . $koneksi->error;
}

$koneksi->close();