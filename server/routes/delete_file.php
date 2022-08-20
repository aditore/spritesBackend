<?php
    require("../config/mysql_connect.php");

    //get id of character_data
    $id = $_GET['id'];

    //delete row from table
    $result = mysqli_query($conn, "DELETE FROM character_data WHERE userData=$id");

    //redirect to the display page (index.php)
    header("Location: ../index.php");
?>