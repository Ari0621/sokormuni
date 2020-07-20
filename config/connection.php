<?php
$servername = "localhost";
$username = "root";
$password = "";

$koneksi = new mysqli($servername, $username, $password);
if ($koneksi->connect_error) {
    die("Connection Failed: " . $koneksi->connect_error);
  }
  echo "Connection Sukses";

  $sql = "CREATE DATABASE sokormuni";
if ($koneksi->query($sql) === TRUE) {
    echo "Database berhasil di buat";
}else{
    echo "database error " . $koneksi->error;
}