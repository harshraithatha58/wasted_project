<?php
    
    session_start();
    // assigning variables for 
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'project';
    
    //connecting to database

    $conn = mysqli_connect($server, $user,$password ,$database );

    if(!$conn){
        die("Connecting failed");
    }
?>