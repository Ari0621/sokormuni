<?php
// require "./../../controller/controller_produk/colors/get_data_colors.php";
// require "./../../controller/controller_produk/kategori/get_data_kategori.php";
require "./../../controller/controller_produk/materials/get_data_materials.php";
require "./../../controller/controller_produk/produk/get_data_produk.php";
// require "./../../controller/controller_produk/sizes/get_data_sizes.php";
// require "./../../controller/controller_produk/stock/get_data_stock.php";
?>
<html>
<body>
<h3>PRODUK</h3>
<form action="./../../controller/controller_produk/produk/add_produk.php" method="post">
    Name: <br><input type="text" name="name" ><br>
    category_id: <br>
    <input type="cekbox" class="form-check-input" name="category_id"value="Pria">
    material: <br>
    <?php foreach ($result_material as $value_material) {?>
   <input type="checkbox" name="material[]" value="<?php echo $value_material['name']?>"><?php echo $value_material['name']?>
<?php } ?>
<?php foreach ($result_colors as $value) {?>
    color: <br><input type="checkbox" name="color" ><br>
<?php } ?>
    size: <br><input type="text" name="size" ><br>
    Description:<br><textarea class="form-control" rows="3" id="textarea" name="description"></textarea>
<br><input type="submit">