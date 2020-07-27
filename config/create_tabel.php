<?php
require "./../config/connection.php";

$db = new Database;

$koneksi = $db->connect();

$sql = "CREATE TABLE add_stock(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total varchar(255) NOT NULL,
    detail_product_id varchar(255) NOT NULL,
    -- product_id VARCHAR(30) NOT NULL,
    -- material VARCHAR(30) DEFAULT NULL,
    -- description VARCHAR(30) DEFAULT NULL,
    -- stock VARCHAR(30) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at  DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($koneksi->query($sql) === TRUE) {
    echo "table berhasil di buat";
}else{
    echo "table error : ". $koneksi->error;
}

$koneksi->close();