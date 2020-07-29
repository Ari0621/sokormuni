<?php
require "Sizes.php";

if (isset($_POST['simpan'])){
    $name            = $_POST['name'];
    $description     = $_POST['description'];

    $sizes = new Sizes();

    $result = $sizes->insert($name, $description);
    
    if ($result) {
        header("Location:./../../view/size/");
    }else{
        echo "Error: ";
    }
}
