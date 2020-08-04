<?php
    require "./../../controller/categories/Category.php";

    $categories = new Category();
    $list_category = $categories->view();
    
    require "./../../controller/materials/Material.php";

    $materials = new Material();
    $list_material = $materials->view();

    require "./../../controller/colors/Colors.php";
    $colors = new Colors();
    $list_colors = $colors->view();

    require "./../../controller/sizes/Sizes.php";
    $sizes = new Sizes();
    $list_sizes= $sizes->view();
?>
<html>
<body>
<h3>PRODUK</h3>
<form action="./../../controller/products/proses_add.php" method="post">
    Name: <br><input type="text" name="name" ><br>
    <br> Category: <br>
    <select name="category_id">
    <br><?php foreach($list_category as $value) { ?>
        <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
    <?php } ?>
    </select>
    
    <br>Material: 
   <br><?php foreach ($list_material as $value) {?>
        <input type="checkbox" name="material[]" value="<?php echo $value['name']?>"><?php echo $value['name']?>
    <?php } ?>
    <br>Colors: 
   <br><?php foreach ($list_colors as $value) {?>
        <input type="checkbox" name="color[]" value="<?php echo $value['name']?>"><?php echo $value['name']?>
    <?php } ?>
    <br>Sizes: 
   <br><?php foreach ($list_sizes as $value) {?>
        <input type="checkbox" name="size[]" value="<?php echo $value['name']?>"><?php echo $value['name']?>
    <?php } ?>
    <br>Stock:<br> <input type="number" name="stock"/><br>
    <br>Description:<br><textarea class="form-control" rows="3" id="textarea" name="description"></textarea>
<br><input type="submit" name="simpan">