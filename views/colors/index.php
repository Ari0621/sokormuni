<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="add_colors.php">Add New colors</a><br/><br/>
    <table border="1">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>created_at</th> 
        <th>updated_at</th>
    </tr>
    <?php
    require "./../../controller/colors/Colors.php";

    $colors = new Colors();

    $result = $colors->view();
    $no = 1;
    
    if (!empty($result)) {
        foreach ($result as $row) {
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['created_at'];?></td>
                <td><?php echo $row['updated_at'];?></td>
                <td><a href='edit_colors.php?id=<?php echo $row["id"]; ?>'>Edit</a>
                 | 
                 <a href='delete_categories.php?id=<?php echo $row["id"]; ?>'>Delete</a>
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