<?php
require "././../../config/connection.php";

$db         = new Database;
$db_connect = $db->connect();
$sql        = "SELECT * FROM sizes";
$result     = $db_connect->query($sql);

$siswaID=$_GET['id'];
$sql=mysql_query("SELECT * FROM sizes WHERE SiswaID='$siswaID'");
$data=mysql_fetch_array($sql);
//data hobi dari tabel siswa 
$datahobi=explode(',', $data['hobi']);