<?php
// memanggil file Product.php
require "./../../controller/materials/Material.php";

if (isset($_GET['id'])) {
    // membuat objek Product
    $material = new Material();

	$id = $_GET['id'];

	// delete data Product
    $material->delete($id);
}					
?>