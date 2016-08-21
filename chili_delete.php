<?php
    include_once './session.php';
    include_once './database.php';
    if (!isset($_SESSION['user_id'])) {
        header("Location: login_user.php");
        die();
    }
    $chili_id = (int)$_GET['id'];
    $query = mysqli_real_escape_string($link, "DELETE FROM chillis WHERE id_chillis='$chili_id'");
    mysqli_query($link, $query);
    header("Location: chili_list.php");
    die();
?>
