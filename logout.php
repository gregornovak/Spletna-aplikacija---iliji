<?php
    session_start();
    //uničnim sejo in s tem uporabnika odjavim
    session_destroy();

    header("Location: login_user.php"); die();
?>
