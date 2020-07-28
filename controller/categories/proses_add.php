<?php
require "Category.php";

if (isset($_POST['simpan'])){
    $name            = $_POST['name'];

    $category = new Category();

    $result = $category->insert($name);
    
    if ($result) {
        header("Location:./../../view/categories/");
    }else{
        echo "Error: ";
    }
}
