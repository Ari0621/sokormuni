<?php
$servername = "localhost";
$username = "root";
$password = "";

$koneksi = new mysqli($servername, $username, $password);
if ($koneksi->connect_error) {
    die("Connection Failed: " . $koneksi->connect_error);
  }
  echo "Connection Sukses";