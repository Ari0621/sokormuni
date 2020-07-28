<?php
$id = $_GET['id'];
echo $id;
require "./../../config/Database.php";
$db = new Database;
$db_connect = $db->connect();
$sql = "SELECT * FROM materials WHERE id='$id'";
$result = $db_connect->query($sql);

?>
<html>
<body>
<form action="update_materials.php" method="post">
<?php 
foreach ($result as $key => $value) {
?>
<input type="hidden" name="id" value="<?php echo $id; ?>">
    Name: <br><input type="text" name="name" value="<?php echo $value['name']; ?>"><br>
    Description:<br><textarea class="form-control" rows="3" id="textarea" name="description" ><?php echo $value['description']; ?></textarea>
<input type="submit">
<?php } ?>
</form>
</body>
</html>