<?php 
//create connection

$link = mysqli_connect($localhost, $username, $password);

//check connection

if($link === false) {
    die("Connection falied: " . mysqli_connect_error());
}

echo "Connection succesful" . mysqli_get_host_info($link);
?>