<?php
        
class Category {

    function view() {
        require_once "./../../config/Database.php";

        $db = new Database();

        $mysqli = $db->connect();

        $sql = "SELECT * FROM categories ORDER BY created_at DESC";

        $result = $mysqli->query($sql);

        while ($data = $result->fetch_assoc()) {
            $hasil[] = $data;
        }

        $mysqli->close();

        return $hasil;
    }
    //add categori
    function insert($name) {
        require_once "./../../config/Database.php";
    
        $db = new Database();
    
        $mysqli = $db->connect();
    
        $name           = $mysqli->real_escape_string($name);
    
        $sql = "INSERT INTO categories (
                    name
                ) VALUES (
                    '$name'
                )";
    
        $result = $mysqli->query($sql);
    
        if($result){
            header("Location: ./../../views/categories/");
        }
        else{
            header("Location: ./../../views/categories/add_categories.php");
        }
    
        $mysqli->close();
    }
    //ger data
    function get_categories($id) {
        require_once "./../../config/Database.php";
    
        $db = new Database();
    
        $mysqli = $db->connect();
    
        $sql = "SELECT * FROM categories WHERE id='$id'";
    
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
    
        $sql = "INSERT INTO categories (
                    name
                ) VALUES (
                    '$name',
                )";
    
        $sql = "UPDATE categories SET  name           = '$name'
                                  WHERE id            = '$id'"; 
    
        $result = $mysqli->query($sql);
    
        if($result){
            header("Location: ./../../views/categories/?alert=3");
        }
        else{
            header("Location: ./../../views/categories/?alert=1");
        }
    
        $mysqli->close();
    }
    
    //delete
    function delete($id) {
        require_once "./../../config/Database.php";
    
        $db = new Database();
    
        $mysqli = $db->connect();
    
        $sql = "DELETE FROM categories WHERE id = '$id'";
    
        $result = $mysqli->query($sql);

        if($result){
            header("Location: ./../../views/categories/?alert=4");
        }
        else{
            header("Location: ./../../views/categories/?alert=1");
        }
    
        $mysqli->close();
    }
}

?>