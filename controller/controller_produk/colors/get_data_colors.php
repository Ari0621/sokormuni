<?php
require "././../../config/connection.php";

$db         = new Database;
$db_connect = $db->connect();
$sql        = "SELECT * FROM colors";
$result_colors     = $db_connect->query($sql);