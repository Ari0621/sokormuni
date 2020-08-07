<?php
$id = $_GET['id'];

require "./../../controller/products/Product.php";
$products = new Product();
$product = $products->get_product($id);
print_r ($id);
$coba = $product['product_stock'];
?>

<html>
<body>
<h3>stock</h3>
<form action="./../../controller/stock/proses_add.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="hidden" name="coba" value="<?php echo $coba; ?>">
<br>Date:<div class="form-group">
    <input type="date" class="form-control" name="ttl">
<br>Total:<br> <input type="number" name="total"><br>
<br><input type="submit" name="simpan">