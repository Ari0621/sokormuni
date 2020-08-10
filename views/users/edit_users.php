<?php
$id = $_GET['id'];

require "./../../controller/users/Users.php";
$users = new Users();
$value = $users->get_users($id);

?>
<html>
<body>
<form action="./../../controller/users/proses_update.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">
    Name: <br><input type="text" name="name" value="<?php echo $value['name']; ?>"><br>
    Username: <br><input type="text" name="username" value="<?php echo $value['username']; ?>"><br>
    Pasword : <br>
        <div class="form-group">
        <input type="password" placeholder="Password" class="form-control" id="password" name="password" value="<?php echo $value['password']; ?>">
        </div>
    Email:<br><input type="email" name="email" placeholder="your email..." value="<?php echo $value['email']; ?>" ><br>
    No hp:<br> <input type="number" name="nohp" value="<?php echo $value['no_hp']; ?>"><br>
    <br>Jenis Kelamin : <br>
        <input type="radio" class="form-check-input" name="jenis_kelamin"value="Pria" <?php ($value['jenis_kelamin'] =='Pria') ? print 'checked' : '';?>>Pria 
        <input type="radio" class="form-check-input" name="jenis_kelamin"value="perempuan" <?php ($value['jenis_kelamin'] =='perempuan') ? print 'checked' : '';?>>perempuan
    <br>Address: <br><input type="text" name="address" value="<?php echo $value['address']; ?>"><br>
    Kode Pos:<br> <input type="number" name="kode_pos" value="<?php echo $value['kode_pos']; ?>"><br>
<input type="submit" name="simpan">
</form>
</body>
</html>