<?php
$id = $_GET['id'];

require "./../../controller/categories/Category.php";
$Categorys = new Category();
$Category = $Categorys->get_categories($id);

?>
<html>
<body>
<form action="./../../controller/categories/proses_update.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">
    Name: <br><input type="text" name="name" value="<?php echo $Category['name']; ?>"><br>
<input type="submit" name="simpan">
</form>
</body>
</html>