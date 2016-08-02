<?php
    include_once './session.php';

    //uničnim sejo in s tem uporabnika odjavim
    session_destroy();

    header("Location: login_check.php"); die();
?>
