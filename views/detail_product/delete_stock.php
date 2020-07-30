<?php
// memanggil file Product.php
require "./../../controller/detail_product/Detail_product.php";

if (isset($_GET['id'])) {
    // membuat objek Product
    $Stock = new Stock();

	$id = $_GET['id'];

	// delete data Product
    $Stock->delete($id);
}					
?>