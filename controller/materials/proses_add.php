<?php
require "Material.php";

if (isset($_POST['simpan'])){
    $mame            = $_POST['name'];
    $description     = $_POST['description'];

    $material = new Material();

    $result = $material->insert($name,  $description);
    
    if ($result) {
        header("Location:./../../view/material/");
    }else{
        echo "Error: ";
    }
}
