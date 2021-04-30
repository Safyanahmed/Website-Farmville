<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jukebox";

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //check connection
    if (!$conn){    
    die("connection failed:".mysqli_connect_error());
    }
    else echo "connected succesfully";
?>   