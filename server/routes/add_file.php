<?php
require("../config/mysql_connect.php");
    
$file = file_get_contents('../db/testJSON.json');
$id = mysqli_real_escape_string($conn, $_POST['id']);

$sql = "INSERT INTO character_data (file, userData) VALUES ('".$file."', '".$id."')";
$result = mysqli_query($conn, $sql);

header("Location: ../index.php");
?>
