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
            $_SESSION['username'] = $data["username"];
            $_SESSION['id'] = $data["id"];
		    $_SESSION['level'] = "Admin";
            header("location:./../../views/users/page-admin.php");
        }else if($data['level']=="User"){
            $_SESSION['username'] = $data["username"];
            $_SESSION['id'] = $data["id"];
            $_SESSION['level'] = "User";
            header("location:./../../views/users/page-user.php");
        }
}else{
    header("location:./../../views/users/login.php?pesan=gagal");
}