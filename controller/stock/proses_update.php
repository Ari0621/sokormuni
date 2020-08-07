<?php
require "Sizes.php";

if (isset($_POST['simpan'])){
    $name            = $_POST['name'];
    $description     = $_POST['description'];
    $id              = $_POST['id'];

    $sizes = new Sizes();

    $result = $sizes->update($id, $name, $description);
    
    if ($result) {
        header("Location:./../../view/size/");
    }else{
        echo "Error: ";
    }
}
