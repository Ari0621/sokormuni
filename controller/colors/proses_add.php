<?php
require "Colors.php";

if (isset($_POST['simpan'])){
    $name            = $_POST['name'];

    $color = new Colors();

    $result = $color->insert($name);
    
    if ($result) {
        header("Location:./../../view/colors/");
    }else{
        echo "Error: ";
    }
}
