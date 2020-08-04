<?php
// memanggil file Product.php
require "./../../controller/colors/Colors.php";

if (isset($_GET['id'])) {
    // membuat objek Product
    $colors = new Colors();

	$id = $_GET['id'];

	// delete data Product
    $colors->delete($id);
}					
?>