<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
<a href="add_users.php">Add New Users</a><br/><br/>
    <table border="1">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Username</th>
        <th>password</th>
        <th>Email</th>
        <th>No Hp</th>
        <th>Level</th>
        <th>Jenis Kelamin</th>
        <th>Address</th>
        <th>Kode Pos</th>
        <th>created_at</th> 
        <th>updated_at</th>
    </tr>
    <?php
    require "./../../controller/users/Users.php";

    $users = new Users();

    $result = $users->view();
    $no = 1;
    
    if (!empty($result)) {
        foreach ($result as $row) {
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['password'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['no_hp'];?></td>
                <td><?php echo $row['level'];?></td>
                <td><?php echo $row['jenis_kelamin'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['kode_pos'];?></td>
                <td><?php echo $row['created_at'];?></td>
                <td><?php echo $row['updated_at'];?></td>
                <td><a href='edit_users.php?id=<?php echo $row["id"]; ?>'>Edit</a>
                 | 
                 <a href='delete_users.php?id=<?php echo $row["id"]; ?>'>Delete</a>
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