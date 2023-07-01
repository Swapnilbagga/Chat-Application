<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chat";
    $conn=mysqli_connect($hostname, $username, $password, $dbname, 3307);
    if(!$conn){
        echo "Database connected error".mysqli_connect_error();
    }
?>