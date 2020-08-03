<?php
$id = $_GET['id'];

require "./../../controller/sizes/Sizes.php";
$sizes = new Sizes();
$value = $sizes->get_sizes($id);

?>
<html>
<body>
<form action="./../../controller/sizes/proses_update.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">
    Name: <br><input type="text" name="name" value="<?php echo $value['name']; ?>"><br>
    Description:<br><textarea class="form-control" rows="3" id="textarea" name="description" ><?php echo $value['description']; ?></textarea>
<input type="submit" name="simpan">
</form>
</body>
</html>