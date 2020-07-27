<?php
require "./../../config/connection.php";

$db_material         = new Database;
$db_connect = $db_material->connect();
$sql        = "SELECT * FROM materials";
$result_material     = $db_connect->query($sql);

//$db->close();

