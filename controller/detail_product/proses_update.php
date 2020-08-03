<?php
require "Sizes.php";

if (isset($_POST['simpan'])){
    $name            = $_POST['name'];
    $description     = implode(",", $_POST['product_id']);
    $id              = $_POST['id'];

    $stock = new Stock();

    $result = $stock->update($id, $name, $description);
    
    if ($result) {
        header("Location:./../../view/Sizes/");
    }else{
        echo "Error: ";
    }
}
