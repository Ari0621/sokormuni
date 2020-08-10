<?php
// memanggil file Product.php
require "./../../controller/users/Users.php";

if (isset($_GET['id'])) {
    // membuat objek Product
    $users = new Users();

	$id = $_GET['id'];

	// delete data Product
    $users->delete($id);
}					
?>