<?php
    require("../config/mysql_connect.php");
    
// getting id of the data from url
    $id = $_GET['id'];

// deleting the row from table
    $result = mysqli_query($conn, "DELETE FROM user_data WHERE id=$id");

// relocate to index after result
    header("Location: ../index.php");
?>
?>