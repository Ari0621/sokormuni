<?php

class Material {

    function view() {
        require_once "./../../config/Database.php";

        $db = new Database();

        $mysqli = $db->connect();

        $sql = "SELECT * FROM materials ORDER BY created_at DESC";

        $result = $mysqli->query($sql);

        while ($data = $result->fetch_assoc()) {
            $hasil[] = $data;
        }

        $mysqli->close();

        return $hasil;
    }

    //add material
    function insert($name, $description) {
        require_once "./../../config/Database.php";
    
        $db = new Database();
    
        $mysqli = $db->connect();
    
        $name           = $mysqli->real_escape_string($name);
        $description    = $mysqli->real_escape_string($description);    
    
        $sql = "INSERT INTO materials (
                    name,
                    description
                ) VALUES (
                    '$name',
                    '$description'
    
                )";
    
        $result = $mysqli->query($sql);
    
        if($result){
            header("Location: ./../../views/materials/");
        }
        else{
            header("Location: ./../../views/materials/add_materials.php");
        }
    
        $mysqli->close();
    }
    
    //get id
    function get_materials($id) {
        require_once "./../../config/Database.php";
    
        $db = new Database();
    
        $mysqli = $db->connect();
    
        $sql = "SELECT * FROM materials WHERE id='$id'";
    
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
    
        $sql = "INSERT INTO materials (
                    name,
                    description
                ) VALUES (
                    '$name',
                    '$description'
                )";
    
        $sql = "UPDATE materials SET  name           = '$name',
                                      description    = '$description'  
                                      WHERE id       = '$id'"; 
    
        $result = $mysqli->query($sql);
    
        if($result){
            header("Location: ./../../views/materials/?alert=3");
        }
        else{
            header("Location: ./../../views/materials/?alert=1");
        }
    
        $mysqli->close();
    }
    
    //delete
    function delete($id) {
        require_once "./../../config/Database.php";
    
        $db = new Database();
    
        $mysqli = $db->connect();
    
        $sql = "DELETE FROM materials WHERE id = '$id'";
    
        $result = $mysqli->query($sql);
    
        if($result){
            header("Location: ./../../views/materials/?alert=4");
        }
        else{
            header("Location: ./../../views/materials/?alert=1");
        }
    
        $mysqli->close();
    }
}

?>