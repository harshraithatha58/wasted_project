<?php
    // connect php database hear
    $server = "localhost";
    $user = "root";
    $passwd = "";
    $database = "";
    // connection object
    $conn = mysqli_connect($server,$user,$passwd,$database);
    if(!$conn){
        die("Falied to connect". mysqli_connect_error());
    }
    else{
        // echo " Sucess";
    }
?>