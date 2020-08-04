<!DOCTYPE html>
<?php $id = $_GET['id']; ?>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="add_detail.php">Add New Stok</a><br/><br/>
    <table border="1">
    <tr>
        <th>No</th>
        <th>Product Id</th>
        <th>Nama Product</th>
        <th>Stock</th>
        <th>created_at</th> 
        <th>updated_at</th>
    </tr>
    <?php
    require "./../../controller/products/detail_product.php";

    $stock = new Detail();

    $result = $stock->view();
    $no = 1;
    
    if (!empty($result)) {
        foreach ($result as $row) {
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $row['product_id'];?></td>
                <td><?php echo $row['nama'];?></td>
                <td><?php echo $row['stock'];?></td>
                <td><?php echo $row['created_at'];?></td>
                <td><?php echo $row['updated_at'];?></td>
                <td><a href='edit_detail.php?id=<?php echo $row["id"]; ?>'>Edit</a>
                 | 
                 <a href='delete_detail.php?id=<?php echo $row["id"]; ?>'>Delete</a>
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