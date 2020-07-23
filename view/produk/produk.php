<?php
require "./../../controller/controller_produk/produk/get_data_produk.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="add_products.html">Add New products</a><br/><br/>
    <table border="1">
    <tr>
        <th>Id</th> <th>Name</th> <th>Created At</th> <th>Material</th> <th>Color</th> <th>Size</th> <th>description</th> <th>created_at</th> <th>updated_at</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['category_id'];?></td>
                <td><?php echo $row['material'];?></td>
                <td><?php echo $row['color'];?></td>
                <td><?php echo $row['size'];?></td>
                <td><?php echo $row['description'];?></td>
                <td><?php echo $row['created_at'];?></td>
                <td><?php echo $row['updated_at'];?></td>
                <td><?php echo "<td><a href='./../../controller/controller_produk/produk/edit_produk.php?id=$row[id]'>Edit</a> | <a href='./../../controller/controller_produk/produk/delete_produk.php?id=$row[id]'>Delete</a></td></tr>";?></td>
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