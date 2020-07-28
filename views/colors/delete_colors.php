<?php
// memanggil file Product.php
require "./../../controller/categories/Colors.php";

if (isset($_GET['id'])) {
    // membuat objek Product
    $colors = new Colors();

	$id = $_GET['id'];

	// delete data Product
    $colors->delete($id);
}					
?>