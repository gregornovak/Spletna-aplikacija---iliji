<?php
    include_once './session.php';
    include_once './database.php';
    if (!isset($_SESSION['user_id'])){
        header("Location: login_user.php");
    }

    $chili_id       = (int)$_POST['id'];
    $chili_name     = mysqli_real_escape_string($link, $_POST['name']);
    $chili_scoville = mysqli_real_escape_string($link, $_POST['scoville']);
    $chili_descr    = mysqli_real_escape_string($link, $_POST['desc']);

    if (!empty($chili_name) && !empty($chili_scoville) && !empty($chili_descr)){
        $query = "UPDATE chillis SET chili_name='$chili_name', chili_scoville='$chili_scoville', chili_description='$chili_descr' WHERE id_chillis='$chili_id'";
        mysqli_query($link, $query);
        header("Location: chili.php?id=$chili_id");
        die();
    } else {
        header("Location: chili.php?id=$chili_id");
        die();
    }
?>
