<?php
$id = $_GET['id'];

require "./../../controller/colors/Colors.php";
$colors = new Colors();
$value = $colors->get_colors($id);


?>
<html>
<body>
<form action="./../../controller/colors/proses_update.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">
    Name: <br><input type="text" name="name" value="<?php echo $value['name']; ?>"><br>
<input type="submit" name="simpan">
</form>
</body>
</html>