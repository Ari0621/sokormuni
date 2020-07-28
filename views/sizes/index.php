<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="add_size.php">Add New Size</a><br/><br/>
    <table border="1">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>description</th>
        <th>created_at</th> 
        <th>updated_at</th>
    </tr>
    <?php
    require "./../../controller/sizes/Sizes.php";

    $sizes = new Sizes();

    $result = $sizes->view();
    $no = 1;
    
    if (!empty($result)) {
        foreach ($result as $row) {
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['description'];?></td>
                <td><?php echo $row['created_at'];?></td>
                <td><?php echo $row['updated_at'];?></td>
                <td><a href='edit_sizes.php?id=<?php echo $row["id"]; ?>'>Edit</a>
                 | 
                 <a href='delete_sizes.php?id=<?php echo $row["id"]; ?>'>Delete</a>
                 </td>
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