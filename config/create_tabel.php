<?php
require "Database.php";

$db = new Database;

$koneksi = $db->connect();

$sql = "CREATE TABLE users(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL,
    username varchar(255) NOT NULL,
    password VARCHAR(30) NOT NULL,
    email varchar(255) NOT NULL,
    no_hp varchar(255) NOT NULL,
    level VARCHAR(30) DEFAULT NULL,
    Jenis_kelamin VARCHAR(30) DEFAULT NULL,
    address VARCHAR(255) DEFAULT NULL,
    -- date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at  DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($koneksi->query($sql) === TRUE) {
    echo "table berhasil di buat";
}else{
    echo "table error : ". $koneksi->error;
}

$koneksi->close();