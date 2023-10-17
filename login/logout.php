<?php

    require'./s_conn.php';
    session_unset();
    session_destroy();
    header("location: signin.php");
    exit;
    
?>