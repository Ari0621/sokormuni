<?php
session_start();
require "./../../config/Database.php";

if (isset($_POST['simpan'])){
 $id_pelanggan   = $_SESSION["pelanggan"]["id"];
 $id_ongkir = $_POST["ongkir"];
 $db = new Database();
 $mysqli = $db->connect();
 $sql = "SELECT * FROM ongkir WHERE id='$id_pelanggan'";
 $result = $mysqli->query($sql);
 $ambildata =$result->fetch_assoc();
 while ($tarif = $ambildata ['harga']) {;
 $total_pembelian  = $totalharga + $tarif ;
 }
 

    $sql = "INSERT INTO checkout (
        user_id,
        id_ongkir,
        total_pembelian
    ) VALUES (
        '$id_pelanggan',
        '$id_ongkir',
        '$total_pembelian'

    )";

$result = $mysqli->query($sql);






}

