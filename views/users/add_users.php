<html>
<body>
<h3>Add User</h3>
<form action="./../../controller/users/proses_add.php" method="post">
Name: <br><input type="text" name="name"required><br>
Username: <br><input type="text" name="username"required><br>
Pasword : <br>
    <div class="form-group">
      <input type="password" placeholder="Password" class="form-control" id="password" name="password">
    </div>
Email:<br><input type="email" name="email" placeholder="your email..." /><br>
No hp:<br> <input type="number" name="nohp"/><br>
Lavel : <br>
    <select name="lavel" id="cars">
        <option value="Admin">Admin</option>
        <option value="User">User</option><br>
    </select>
<br>Jenis Kelamin : <br>
    <input type="radio" class="form-check-input" name="jenis_kelamin"value="Pria">Pria 
    <input type="radio" class="form-check-input" name="jenis_kelamin"value="perempuan">perempuan
<br>Address: <br><input type="text" name="address"required><br>
Kode Pos:<br> <input type="number" name="kode_pos"/><br>
<br><input type="submit" name="simpan">