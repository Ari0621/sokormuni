<?php
$id = $_GET['id'];
echo $id;
require "./../../config/Database.php";
$db = new Database;
$db_connect = $db->connect();
$sql = "SELECT * FROM products WHERE id='$id'";
$result = $db_connect->query($sql);

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
$list_sizes= $sizes->view()

?>
<html>
<body>
<form action="update_produk.php" method="post">
<?php 
foreach ($result as $key => $value) {
?>
<input type="hidden" name="id" value="<?php echo $id; ?>">
    Name: <br><input type="text" name="name" value="<?php echo $value['name']; ?>"><br>
    <br> category_id: <br>
    <select name="category_id" class="form-control">
    <?php foreach($list_category as $value) { ?>
    <option value="<?php echo $value->id ?>" <?php $value->id === $order->products_category_id  ? "selected" : ""?>><?php $value->name ?></option>
    <?php } ?>
    </select>
    
    <br>material: 
   <?php foreach ($list_material as $value) {?>
        <input type="checkbox" name="material[]" value="<?php echo $value['name']?>"><?php echo $value['name']?>
    <?php } ?>
    <br>Colors: 
   <?php foreach ($list_colors as $value) {?>
        <input type="checkbox" name="color[]" value="<?php echo $value['name']?>"><?php echo $value['name']?>
    <?php } ?>
    <br>Sizes: 
   <?php foreach ($list_sizes as $value) {?>
        <input type="checkbox" name="size[]" value="<?php echo $value['name']?>"><?php echo $value['name']?>
    <?php } ?>
    <br>Description:<br><textarea class="form-control" rows="3" id="textarea" name="description" ><?php echo $value['description']; ?></textarea>
<br><input type="submit" name="simpan">
<?php } ?>
</form>
</body>
</html>