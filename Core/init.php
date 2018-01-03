<?php
    $db = mysqli_connect("localhost", "root", "mbluestein88", "eweek");
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(mysqli_connect_errno()){
        echo 'Database connection failed with the following errors: ' . mysqli_connect_error();
        die();
    }
?>