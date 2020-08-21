<?php
session_start();
require "./../../config/Database.php";

$db = new Database();

$mysqli = $db->connect();

$sql = "SELECT * FROM users where username='$_POST[username]'and password='$_POST[password]' "; 
$result = $mysqli->query($sql);
if ($result->num_rows > 0) { 
    $data= $result->fetch_assoc();
        if($data['level']=="Admin"){
            $_SESSION['admin'] = $data;
            echo "<script>alert('Admin sukses login');</script>";
            echo "<script>location='./../../Admin/index.php';</script>";
        }else if($data['level']=="User"){
            $_SESSION['pelanggan'] = $data;
            echo "<script>alert('anda sukses login');</script>";
            if(isset($_SESSION['keranjang']) or !empty($_SESSION['keranjang'])){
                echo "<script>location='./../../views/tampilan/index.php';</script>";
            }else{
                echo "<script>location='./../../views/tampilan/checkout.php';</script>";
            }
        }
}else{
    echo "<script>alert('anda gagal login silakan periksa akun anda');</script>";
    echo "<script>location='./../../tampilan/users/login.php?pesan=gagal';</script>";
}