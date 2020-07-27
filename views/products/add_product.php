<?php
    require "./../../controller/categories/Category.php";

    $categories = new Category();
    $list_category = $categories->view();
    
    require "./../../controller/materials/Material.php";

    $materials = new Material();
    $list_material = $materials->view();
?>
<html>
<body>
<h3>PRODUK</h3>
<form action="./../../controller/products/proses_add.php" method="post">
    Name: <br><input type="text" name="name" ><br>
    <br> category_id: <br>
    <select name="category_id">
    <?php foreach($list_category as $value) { ?>
        <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
    <?php } ?>
    </select>
    
    <br>material: 
   <?php foreach ($list_material as $value) {?>
        <input type="checkbox" name="material[]" value="<?php echo $value['name']?>"><?php echo $value['name']?>
    <?php } ?>
<br>
 <!-- 
<?php foreach ($list_data as $value) {?>
    color: <br><input type="checkbox" name="color" ><br>
<?php } ?> -->
    size: <br><input type="text" name="size" ><br>
    Description:<br><textarea class="form-control" rows="3" id="textarea" name="description"></textarea>
<br><input type="submit" name="simpan">