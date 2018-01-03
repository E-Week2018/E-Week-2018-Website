<?php
    require_once('../Core/init.php');
    //unset session and forward
    unset($_SESSION['SBUser']);
    header('Location: ../index.php');
?>