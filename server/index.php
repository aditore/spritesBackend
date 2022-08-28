<?php 
    // connect with mysql
    require("./config/mysql_connect.php");
    
    // grab data
    $sql = "SELECT * FROM user_data ORDER BY id ASC";
    // result of grabbing data
    $result = mysqli_query($conn, $sql);
    
?>
<!-- homepage -->
<html>
<head>
    <title>Sprites Users</title>
</head>

<body>
    <!-- link to add user -->
    <a href="./add.html">Add User</a>
    </br>
    <!-- show data -->
    <table>
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Password</td>
            <td>Update</td>
        </tr>
        <?php
        // fetch reult
            while ($res = mysqli_fetch_array($result)) { 
                echo "<tr>";
                echo "<td>".$res['id']."</td>";
                echo "<td>".$res['username']."</td>";
                echo "<td>".$res['password']."</td>";
                echo "<td><a href=\"./routes/edit_user.php?id=$res[id]\">Edit</a> | <a href=\"./routes/delete_user.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";  
            }
        ?>
    </table>
</body>
    