<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.php">product</a><br/><br/>
    <table border="1">
    <tr>
        <th>No</th>
        <th>Date</th>
        <th>Total</th>
        <th>Id produk</th>
        <th>created_at</th> 
        <th>updated_at</th>
    </tr>
    <?php
    require "./../../controller/stock/Stock.php";

    $stock = new Stock();

    $result = $stock->view();
    $no = 1;
    
    if (!empty($result)) {
        foreach ($result as $row) {
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $row['date'];?></td>
                <td><?php echo $row['total'];?></td>
                <td><?php echo $row['product_id'];?></td>
                <td><?php echo $row['created_at'];?></td>
                <td><?php echo $row['updated_at'];?></td>
                <td><a href='edit_stock.php?id=<?php echo $row["id"]; ?>'>Edit</a>
                 | 
                 <a href='delete_stock.php?id=<?php echo $row["id"]; ?>'>Delete</a>
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