<?php
require "Users.php";

if (isset($_POST['simpan'])){
    $name            = $_POST['name'];
    $username        = $_POST['username'];
    $password        = $_POST['password'];
    $email           = $_POST['email'];
    $no_hp           = $_POST['nohp'];
    $jenis_kelamin   = $_POST['jenis_kelamin'];
    $address         = $_POST['address'];
    $kode_pos        = $_POST['kode_pos'];
    $id              = $_POST['id'];

    // echo $name, $username, $password, $email, $no_hp, $jenis_kelamin, $address, $kode_pos;

    $users = new Users();

    $result = $users->update($id, $name, $username, $password, $email, $no_hp, $jenis_kelamin, $address, $kode_pos);
    
    if ($result) {
        header("Location:./../../view//");
    }else{
        echo "Error: ";
    }
}
