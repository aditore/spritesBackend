<?php
    require("../config/mysql_connect.php");
    
    // grab username and password that were typed into the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // mysql statement to add user into users table
    $sql = "INSERT INTO user_data (username, password) VALUES ('".$username."', '".$password."')";
    // result from previous statment
    $result = mysqli_query($conn, $sql);

    // relocate to the index after response
    header("Location: ../index.php");
?>
