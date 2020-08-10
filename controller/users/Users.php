<?php
        
class Users {

    function view() {
        require_once "./../../config/Database.php";

        $db = new Database();

        $mysqli = $db->connect();

        $sql = "SELECT * FROM users ORDER BY created_at DESC";

        $result = $mysqli->query($sql);

        while ($data = $result->fetch_assoc()) {
            $hasil[] = $data;
        }

        $mysqli->close();

        return $hasil;
    }

    //untuk add users
    function insert($name, $username, $password, $email, $no_hp, $lavel, $jenis_kelamin, $address, $kode_pos) {
    
    require_once "./../../config/Database.php";

    $db = new Database();

    $mysqli = $db->connect();

    $name           = $mysqli->real_escape_string($name);
    $username       = $mysqli->real_escape_string($username);
    $password       = $mysqli->real_escape_string($password);
    $email          = $mysqli->real_escape_string($email);
    $no_hp          = $mysqli->real_escape_string($no_hp);
    $lavel           = $mysqli->real_escape_string($lavel);
    $jenis_kelamin  = $mysqli->real_escape_string($jenis_kelamin);
    $address        = $mysqli->real_escape_string($address);
    $kode_pos       = $mysqli->real_escape_string($kode_pos);

    $sql = "INSERT INTO users (
                name,
                username,
                password,
                email,
                no_hp,
                level,
                jenis_kelamin,
                address,
                kode_pos
            ) VALUES (
                '$name',
                '$username',
                '$password',
                '$email',
                '$no_hp',
                '$lavel',
                '$jenis_kelamin',
                '$address',
                '$kode_pos'

            )";

    $result = $mysqli->query($sql);

    if($result){
        header("Location: ./../../views/users/");
    }
    else{
        header("Location: ./../../views/users/add_users.php");
    }

    $mysqli->close();
    }

    //untuk memanggil id
    function get_users($id) {
    require_once "./../../config/Database.php";

    $db = new Database();

    $mysqli = $db->connect();

    $sql = "SELECT * FROM users WHERE id='$id'";

    $result = $mysqli->query($sql);
    $data   = $result->fetch_assoc();

    $mysqli->close();
    
    return $data;
    }

    //UPDATE
    function update($id, $name, $username, $password, $email, $no_hp, $jenis_kelamin, $address, $kode_pos) {
    
    require_once "./../../config/Database.php";

    $db = new Database();

    $mysqli = $db->connect();

    $name           = $mysqli->real_escape_string($name);
    $username       = $mysqli->real_escape_string($username);
    $password       = $mysqli->real_escape_string($password);
    $email          = $mysqli->real_escape_string($email);
    $no_hp          = $mysqli->real_escape_string($no_hp);
    $jenis_kelamin  = $mysqli->real_escape_string($jenis_kelamin);
    $address        = $mysqli->real_escape_string($address);
    $kode_pos       = $mysqli->real_escape_string($kode_pos);

    $sql = "INSERT INTO users (
                name,
                username,
                password,
                email,
                no_hp,
                jenis_kelamin,
                address,
                kode_pos
            ) VALUES (
                '$name',
                '$username',
                '$password',
                '$password',
                '$password',
                '$email',
                '$no_hp',
                '$jenis_kelamin',
                '$address',
                '$kode_pos'
            )";

    $sql = "UPDATE users SET      name           = '$name',
                                  username       = '$username',
                                  password       = '$password',
                                  email          = '$email',
                                  no_hp          = '$no_hp',
                                  jenis_kelamin  = '$jenis_kelamin', 
                                  address        = '$address' 
                                  WHERE id       = '$id'"; 

    $result = $mysqli->query($sql);

    if($result){
        header("Location: ./../../views/users/?alert=3");
    }
    else{
        header("Location: ./../../views/users/?alert=1");
    }

    $mysqli->close();
    }

    //DELETE
    function delete($id) {
    require_once "./../../config/Database.php";

    $db = new Database();

    $mysqli = $db->connect();

    $sql = "DELETE FROM users WHERE id = '$id'";

    $result = $mysqli->query($sql);

    if($result){
        header("Location: ./../../views/users/?alert=4");
    }
    else{
        header("Location: ./../../views/users/?alert=1");
    }
    $mysqli->close();
    }

}


?>