<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="add_product.php">Add New products</a><br/><br/>
    <table border="1">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Category</th>
        <th>Material</th> 
        <th>Color</th> 
        <th>Size</th> 
        <th>description</th> 
        <th>created_at</th> 
        <th>updated_at</th>
    </tr>
    <?php
    require "./../../controller/products/Product.php";

    $products = new Product();

    $result = $products->view();
    $no = 1;
    
    if (!empty($result)) {
        foreach ($result as $row) {
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $row['product_name'];?></td>
                <td><?php echo $row['category_name'];?></td>
                <td><?php echo $row['product_material'];?></td>
                <td><?php echo $row['product_color'];?></td>
                <td><?php echo $row['product_size'];?></td>
                <td><?php echo $row['product_description'];?></td>
                <td><?php echo $row['product_created_at'];?></td>
                <td><?php echo $row['product_updated_at'];?></td>
                <td><a href='edit_product.php?id=<?php echo $row["product_id"]; ?>'>Edit</a>
                 | 
                 <a href='delete_product.php?id=<?php echo $row["product_id"]; ?>'>Delete</a>
                 | 
                 <a href='add_stock.php?id=<?php echo $row["id"]; ?>'>Add stock</a>
                 | 
                 <a href='detail.php'>Detail</a>
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