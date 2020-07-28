<?php
require "Colors.php";

if (isset($_POST['simpan'])){
    $mame            = $_POST['name'];

    $colors = new Colors();

    $result = $colors->insert($name);
    
    if ($result) {
        header("Location:./../../view/colors/");
    }else{
        echo "Error: ";
    }
}
