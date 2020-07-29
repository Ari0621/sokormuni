<?php
require "Colors.php";

if (isset($_POST['simpan'])){
    $name            = $_POST['name'];
    $id              = $_POST['id'];

    $color = new Colors();

    $result = $color->update($name, $id);
    
    if ($result) {
        header("Location:./../../view/colors/");
    }else{
        echo "Error: ";
    }
}
