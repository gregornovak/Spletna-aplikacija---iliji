<?php
    include_once './session.php';
    include_once './database.php';
    include_once './functions.php';
    if (!isset($_SESSION['user_id'])){
        header("Location: login_user.php");
    }

    $chili_id       = (int)$_POST['id'];
    $chili_name     = clean_data($_POST['name']);
    $chili_scoville = clean_data($_POST['scoville']);
    $chili_descr    = clean_data($_POST['desc']);

    if (!empty($chili_name) && !empty($chili_scoville) && !empty($chili_descr)){
        //kličem funkcijo iz datoteke functions.php
        $chili_scoville = scoville_format($chili_scoville);
        $query = "UPDATE chillis SET chili_name='$chili_name', chili_scoville='$chili_scoville', chili_description='$chili_descr' WHERE id_chillis='$chili_id'";
        mysqli_query($link, $query);
        header("Location: chili.php?id=$chili_id");
        die();
    } else {
        $_SESSION['errors'] = array("Niste vpisali vseh podatkov!");
        header("Location: chili.php?id=$chili_id");
        die();
    }
?>
