<?php
require "./../../controller/products/Product.php";
$products = new Product();
$list_product = $products->view();
?>

<html>
<body>
<h3>stock</h3>
<form action="./../../controller/detail_product/proses_add.php" method="post">
<br> Nama Product: <br>
    <select name="product_id">
    <?php foreach($list_product as $value) { ?>
        <option value="<?php echo $value['$last_id'] ?>"><?php echo $value['product_name'] ?></option>
    <?php } ?>
    </select>
<br>Stock:<br> <input type="number" name="stock"/><br>
<br><input type="submit" name="simpan">