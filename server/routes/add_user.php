<?php
    require("../config/mysql_connect.php");
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO user_data (username, password) VALUES ('".$username."', '".$password."')";
    $result = mysqli_query($conn, $sql);

    header("Location: ../index.php");
?>
