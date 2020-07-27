<?php
// memanggil file Product.php
require "./../../controller/products/Product.php";

if (isset($_GET['id'])) {
    // membuat objek Product
    $product = new Product();

	$id = $_GET['id'];

	// delete data Product
    $product->delete($id);
}					
?>