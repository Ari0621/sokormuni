<?php
require "./../controller/sizes/get_data_sizes.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="add_sizes.html">Add New sizes</a><br/><br/>
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
                <td><?php echo "<td><a href='./../controller/sizes/edit_sizes.php?id=$row[id]'>Edit</a> | <a href='./../controller/sizes/delete_sizes.php?id=$row[id]'>Delete</a></td></tr>";?></td>
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