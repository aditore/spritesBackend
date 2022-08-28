<?php
    require("../config/mysql_connect.php");

    // get id of character_data
    $id = $_GET['id'];

    // delete row from table
    $result = mysqli_query($conn, "DELETE FROM character_data WHERE userData=$id");

    // relocate to index after response from previous statement
    header("Location: ../index.php");
?>