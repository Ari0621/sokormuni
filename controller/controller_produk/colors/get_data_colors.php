<?php
require "././../../config/connection.php";

$db         = new Database;
$db_connect = $db->connect();
$sql        = "SELECT * FROM colors";
$result     = $db_connect->query($sql);