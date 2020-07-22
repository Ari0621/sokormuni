<?php
require "./../../config/connection.php";

$db         = new Database;
$db_connect = $db->connect();
// $query_categories   = "SELECT * FROM categories";
// $query_materials       = "SELECT * FROM colors";
// $query_colors       = "SELECT * FROM materials";
// $query_products       = "SELECT * FROM products";
// $query_sizes        = "SELECT * FROM sizes ";
//$query_products        = "SELECT * FROM products ";
// $result_categories  = $db_connect->query($query_categories);
// $result_colors      = $db_connect->query($query_colors);
// $result_materials      = $db_connect->query($query_materials);
// $result_products      = $db_connect->query($query_products);
// $result_sizes       = $db_connect->query($query_sizes );
//$result_products       = $db_connect->query($query_products );

$sql        = "SELECT * FROM products";
$result     = $db_connect->query($sql);


// $query_header = mysqli_query($conn, 'SELECT * FROM tabel_header');

// echo '<table><thead>';
// while ($row = mysqli_fetch_assoc($query_header)) {
// 	echo '<tr><th>'.$row['mapel'].'</th></tr>';
// }
// echo '</thead>';

// $query_isi = mysqli_query($conn, 'SELECT * FROM tabel_isi');
// echo '<tbody>';

// while ($row = mysqli_fetch_assoc($query_isi)) {
// 	echo '<tr><td>'.$row['mapel'].'</td></tr>';
// }

// echo '</tbody></table>';

// $query_categories = mysqli_query($conn, 'SELECT * FROM categories');
// $query_colors = mysqli_query($conn, 'SELECT * FROM colors');
// $query_materials = mysqli_query($conn, 'SELECT * FROM materials');
// $query_sizes = mysqli_query($conn, 'SELECT * FROM sizes');