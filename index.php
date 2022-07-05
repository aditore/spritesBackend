<?php 
    require("mysql_connect.php");
    $sql = "SELECT * FROM notes";
    $notes = $conn->query($sql);

    echo "Connection Success";
?>

