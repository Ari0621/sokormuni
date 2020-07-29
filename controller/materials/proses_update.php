<?php
require "Material.php";

if (isset($_POST['simpan'])){
    $name            = $_POST['name'];
    $description     = $_POST['description'];
    $id              = $_POST['id'];

    $material = new Material();

    $result = $material->update($id, $name, $description);
    
    if ($result) {
        header("Location:./../../view/material/");
    }else{
        echo "Error: ";
    }
}
