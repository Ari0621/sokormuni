<?php
session_start();
if(!isset($_SESSION['username'])){
    die("Anda belum login");
}
if($_SESSION['level']!="User"){
    die("Anda bukan User");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<h1>Users</h1>