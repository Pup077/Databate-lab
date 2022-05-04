<?php
    $dbserver = "localhost";
    $user = "root";
    $pw = "";
    $db = "schooldb";
    $conn = new mysqli($dbserver,$user,$pw,$db);
    if($conn->connect_error){
        die("Error! can't connect to DB" . $conn->connect_error);
    }
?>