<?php
session_start();
if(!isset($_SESSION['username'])){
    die("Anda belum login");
}
if($_SESSION['level']!="Admin"){
    die("Anda bukan Admin");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<h1>admin</h1>