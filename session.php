<?php
    session_start();

    $root = '/pikantna lestvica/';

    //zaščita za neprijavljene uporabnike

    $allowed = [$root.'login_user.php',$root.'register_user.php',
                $root.'login_check.php'];
    //če uporabnik ni prijavljen in ni na dovoljenih spletnih straneh, ga preusmeri na prijavo
    if (!isset($_SESSION['user_id']) &&            !in_array($_SERVER['REQUEST_URI'], $allowed)) {
        header("Location: login_user.php");
    }

    $adminAllowed = [$root.'index.php', $root.'chili_list.php',$root.'chili.php'];

    if (in_array($_SERVER['REQUEST_URI'],$adminAllowed) &&
            $_SESSION['admin'] != 1) {

        header("Location: index.php");
    }


?>
