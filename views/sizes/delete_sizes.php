<?php
// memanggil file Product.php
require "./../../controller/sizes/Sizes.php";

if (isset($_GET['id'])) {
    // membuat objek Product
    $sizes = new Sizes();

	$id = $_GET['id'];

	// delete data Product
    $sizes->delete($id);
}					
?>