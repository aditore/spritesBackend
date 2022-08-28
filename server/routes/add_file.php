<?php
require("../config/mysql_connect.php");

// grab file from source
$file = file_get_contents('../db/testJSON.json');
// grab id from mysql connection
$id = mysqli_real_escape_string($conn, $_POST['id']);

// mysql statement to add file into characters table
$sql = "INSERT INTO character_data (file, userData) VALUES ('".$file."', '".$id."')";
// response from previous stament
$result = mysqli_query($conn, $sql);

// relocate to index after complete
header("Location: ../index.php");
?>
