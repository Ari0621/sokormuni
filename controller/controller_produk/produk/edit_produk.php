<?php
$id = $_GET['id'];
echo $id;
require "./../../../config/connection.php";
$db = new Database;
$db_connect = $db->connect();
$sql = "SELECT * FROM products WHERE id='$id'";
$result = $db_connect->query($sql);

?>
<html>
<body>
<form action="update_produk.php" method="post">
<?php 
foreach ($result as $key => $value) {
?>
<input type="hidden" name="id" value="<?php echo $id; ?>">
    Name: <br><input type="text" name="name" value="<?php echo $value['name']; ?>"><br>
    category_id: <br><input type="text" name="category_id" value="<?php echo $value['category_id']; ?>"><br>
    material: <br><input type="text" name="material" value="<?php echo $value['material']; ?>"><br>
    color: <br><input type="text" name="color" value="<?php echo $value['color']; ?>"><br>
    size: <br><input type="text" name="size" value="<?php echo $value['size']; ?>"><br>
    Description:<br><textarea class="form-control" rows="3" id="textarea" name="description"></textarea>
<input type="submit">
<?php } ?>
</form>
</body>
</html>