<?php 

    require("mysql_connect.php");
    $sql = "SELECT * FROM notes";
    $notes = $conn->query($sql);

    echo "\n";

    var_dump($notes);
    echo "\n";

    $notesArray = (array)$notes;
    echo "Array conversion - ";
    var_dump($notesArray); 
    echo "\n";

    echo count($notesArray) . " notes";
    
?>


