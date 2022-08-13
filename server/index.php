<?php 
    require("./config/mysql_connect.php");
    
    $sql = "SELECT * FROM user_data ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

?>

<html>
<head>
    <title>Sprites Users</title>
</head>

<body>
    <a href="./add.html">Add User</a>
    </br>
    <table>
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Password</td>
            <td>Update</td>
        </tr>
        <?php
            while($res = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$res['id']."</td>";
                echo "<td>".$res['username']."</td>";
                echo "<td>".$res['password']."</td>";
                echo "<td><a href=\"./routes/edit_user.php?id=$res[id]\">Edit</a> | <a href=\"./routes/delete_user.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            }
        ?>
    </table>
</body>
