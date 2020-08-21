<?php
        
class Sizes {

    function view() {
        require_once "./../config/Database.php";

        $db = new Database();

        $mysqli = $db->connect();

        $sql = "SELECT * FROM sizes ORDER BY created_at DESC";

        $result = $mysqli->query($sql);

        while ($data = $result->fetch_assoc()) {
            $hasil[] = $data;
        }

        $mysqli->close();

        return $hasil;
    }

    //add sizes
    function insert($name, $description) {
    require_once "./../../config/Database.php";

    $db = new Database();

    $mysqli = $db->connect();

    $name           = $mysqli->real_escape_string($name);
    $description    = $mysqli->real_escape_string($description);    

    $sql = "INSERT INTO sizes (
                name,
                description
            ) VALUES (
                '$name',
                '$description'

            )";

    $result = $mysqli->query($sql);

    if($result){
        header("Location: ./../../views/sizes/");
    }
    else{
        header("Location: ./../../views/sizes/add_sizes.php");
    }

    $mysqli->close();
    }

    // get data 
    function get_sizes($id) {
    require_once "./../../config/Database.php";

    $db = new Database();

    $mysqli = $db->connect();

    $sql = "SELECT * FROM sizes WHERE id='$id'";

    $result = $mysqli->query($sql);
    $data   = $result->fetch_assoc();

    $mysqli->close();
    
    return $data;
    }

    //update
    function update($id, $name, $description) {
    require_once "./../../config/Database.php";

    $db = new Database();

    $mysqli = $db->connect();

    $name           = $mysqli->real_escape_string($name);
    $description    = $mysqli->real_escape_string($description);

    $sql = "INSERT INTO sizes (
                name,
                description
            ) VALUES (
                '$name',
                '$description'
            )";

    $sql = "UPDATE sizes SET  name           = '$name',
                                  description    = '$description'  
                                  WHERE id       = '$id'"; 

    $result = $mysqli->query($sql);

    if($result){
        header("Location: ./../../views/sizes/?alert=3");
    }
    else{
        header("Location: ./../../views/sizes/?alert=1");
    }

    $mysqli->close();
    }

    //delete
    function delete($id) {
    require_once "./../../config/Database.php";

    $db = new Database();

    $mysqli = $db->connect();

    $sql = "DELETE FROM sizes WHERE id = '$id'";

    $result = $mysqli->query($sql);

    if($result){
        header("Location: ./../../views/sizes/?alert=4");
    }
    else{
        header("Location: ./../../views/sizes/?alert=1");
    }

    $mysqli->close();
    }

}


?>