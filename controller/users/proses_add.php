<?php
require "Users.php";

if (isset($_POST['simpan'])){
    $name            = $_POST['name'];
    $username        = $_POST['username'];
    $password        = $_POST['password'];
    $email           = $_POST['email'];
    $no_hp           = $_POST['nohp'];
    $lavel           = $_POST['lavel'];
    $jenis_kelamin   = $_POST['jenis_kelamin'];
    $address         = $_POST['address'];
    $kode_pos        = $_POST['kode_pos'];
// echo $name, $username, $password, $email, $no_hp, $lavel, $jenis_kelamin, $address;

    $users = new Users();

    $result = $users->insert($name, $username, $password, $email, $no_hp, $lavel, $jenis_kelamin, $address ,$kode_pos);
    
    if ($result) {
        header("Location:./../../view/size/");
    }else{
        echo "Error: ";
    }
}
