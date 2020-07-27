<?php
require "./../../config/connection.php";

$db         = new Database;
$db_connect = $db->connect();
$sql        = "SELECT * FROM add_stock";
$result     = $db_connect->query($sql);