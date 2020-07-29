<?php
$id = $_GET['id'];
echo $id;
require "./../../config/Database.php";
$db = new Database;
$db_connect = $db->connect();
$sql = "SELECT * FROM categories WHERE id='$id'";
$result = $db_connect->query($sql);

?>
<html>
<body>
<form action="./../../controller/categories/proses_update.php" method="post">
<?php 
foreach ($result as $key => $value) {
?>
<input type="hidden" name="id" value="<?php echo $id; ?>">
    Name: <br><input type="text" name="name" value="<?php echo $value['name']; ?>"><br>
<input type="submit" name="simpan">
<?php } ?>
</form>
</body>
</html>