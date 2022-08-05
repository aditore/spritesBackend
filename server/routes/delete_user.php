<?php
    require("../config/mysql_connect.php");
    
//getting id of the data from url
    $id = $_GET['id'];

//deleting the row from table
    $result = mysqli_query($conn, "DELETE FROM user_data WHERE id=$id");

//redirecting to the display page (index.php in our case)
    header("Location: ../index.php");
?>
?>