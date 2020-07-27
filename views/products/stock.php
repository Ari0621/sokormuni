<?php
require "./../../controller/controller_produk/stock/get_data_stock.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="add_materials.html">Add New stock</a><br/><br/>
    <table border="1">
    <tr>
        <th>Id</th> <th>Name</th> <th>Description</th> <th>created At</th> <th>Updated At</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['description'];?></td>
                <td><?php echo $row['created_at'];?></td>
                <td><?php echo $row['updated_at'];?></td>
                <td><?php echo "<td><a href='./../../controller/controller_produk/stock/edit_stock.php?id=$row[id]'>Edit</a> | <a href='./../../controller/controller_produk/stock/delete_stock.php?id=$row[id]'>Delete</a></td></tr>";?></td>
            </tr>
            <?php 
            }
    }else{
        echo "data 0";
    }
    ?>
    </table>
</body>
</html>