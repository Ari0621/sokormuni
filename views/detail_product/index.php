<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="add_stock.php">Add New Stok</a><br/><br/>
    <table border="1">
    <tr>
        <th>No</th>
        <th>Nama Product</th>
        <th>Stock</th>
        <th>created_at</th> 
        <th>updated_at</th>
    </tr>
    <?php
    require "./../../controller/detail_product/detail_product.php";

    $stock = new Stock();

    $result = $stock->view();
    $no = 1;
    
    if (!empty($result)) {
        foreach ($result as $row) {
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $row['detail_product_id'];?></td>
                <td><?php echo $row['detail_stock'];?></td>
                <td><?php echo $row['detail_created_at'];?></td>
                <td><?php echo $row['detail_updated_at'];?></td>
                <td><a href='edit_stock.php?id=<?php echo $row["id"]; ?>'>Edit</a>
                 | 
                 <a href='delete_stock.php?id=<?php echo $row["id"]; ?>'>Delete</a>
                 | 
                 <a href='delete_stock.php?id=<?php echo $row["id"]; ?>'>add stock</a>
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