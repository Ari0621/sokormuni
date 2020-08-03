<?php
require "Category.php";

if (isset($_POST['simpan'])){
    $name            = $_POST['name'];
    $id              = $_POST['id'];

    $category = new Category();

    $result = $category->update($name, $id);
    
    if ($result) {
        header("Location:./../../view/category/");
    }else{
        echo "Error: ";
    }
}