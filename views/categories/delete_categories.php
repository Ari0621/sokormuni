<?php
// memanggil file Product.php
require "./../../controller/categories/Category.php";

if (isset($_GET['id'])) {
    // membuat objek Product
    $category = new Category();

	$id = $_GET['id'];

	// delete data Product
    $category->delete($id);
}					
?>