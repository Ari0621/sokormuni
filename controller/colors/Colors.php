<?php
        
class Colors {

    function view() {
        require_once "./../../config/Database.php";

        $db = new Database();

        $mysqli = $db->connect();

        $sql = "SELECT * FROM colors ORDER BY created_at DESC";

        $result = $mysqli->query($sql);

        while ($data = $result->fetch_assoc()) {
            $hasil[] = $data;
        }

        $mysqli->close();

        return $hasil;
    }
    //add colors
    function insert($name) {
    require_once "./../../config/Database.php";

    $db = new Database();

    $mysqli = $db->connect();

    $name           = $mysqli->real_escape_string($name);

    $sql = "INSERT INTO colors (
                name
            ) VALUES (
                '$name'
            )";

    $result = $mysqli->query($sql);

    if($result){
        header("Location: ./../../views/colors/");
    }
    else{
        header("Location: ./../../views/colors/add_colors.php");
    }

    $mysqli->close();
    }
    //get id 
    function get_colors($id) {
    require_once "./../../config/Database.php";

    $db = new Database();

    $mysqli = $db->connect();

    $sql = "SELECT * FROM colors WHERE id='$id'";

    $result = $mysqli->query($sql);
    $data   = $result->fetch_assoc();

    $mysqli->close();
    
    return $data;
    }

    //update
    function update($name, $id) {
    require_once "./../../config/Database.php";

    $db = new Database();

    $mysqli = $db->connect();

    $name           = $mysqli->real_escape_string($name);

    $sql = "INSERT INTO colors (
                name
            ) VALUES (
                '$name',
            )";

    $sql = "UPDATE colors SET  name           = '$name'
                              WHERE id            = '$id'"; 

    $result = $mysqli->query($sql);

    if($result){
        header("Location: ./../../views/colors/?alert=3");
    }
    else{
        header("Location: ./../../views/colors/?alert=1");
    }

    $mysqli->close();
    }

    //delete
    function delete($id) {
    require_once "./../../config/Database.php";

    $db = new Database();

    $mysqli = $db->connect();

    $sql = "DELETE FROM colors WHERE id = '$id'";

    $result = $mysqli->query($sql);

    if($result){
        header("Location: ./../../views/colors/?alert=4");
    }
    else{
        header("Location: ./../../views/colors/?alert=1");
    }

    $mysqli->close();
    }
}


?>