<?php
$id = $_GET['id'];
echo $id;
require_once "./../../config/Database.php";
$db = new Database;
$db_connect = $db->connect();
$sql = "SELECT * FROM colors WHERE id='$id'";
$result = $db_connect->query($sql);

?>
<html>
<body>
<form action="update_colors.php" method="post">
<?php 
foreach ($result as $key => $value) {
?>
<input type="hidden" name="id" value="<?php echo $id; ?>">
Name: <br>
<input type="text" name="name" value="<?php echo $value['name']; ?>"><br>
<input type="submit">
<?php } ?>
</form>
</body>
</html>