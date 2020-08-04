<?php
// memanggil file Product.php
require "./../../controller/products/Detail_product.php";

if (isset($_GET['id'])) {
    // membuat objek Product
    $Stock = new Detail();

	$id = $_GET['id'];

	// delete data Product
    $Stock->delete($id);
}					
?>