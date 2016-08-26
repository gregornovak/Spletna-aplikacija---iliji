<?php
    include_once './session.php';
    include_once './database.php';
    if (!isset($_SESSION['user_id'])) {
        header("Location: login_user.php");
        die();
    }
    //pridobim id čilija z get
    $chili_id = (int)$_GET['id'];
    $user_id = $_SESSION['user_id'];
    //poizvedba za uporabnika
    $query = "SELECT id_users FROM chillis WHERE id_chillis = '$chili_id' AND id_users = '$user_id'";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) === 1) {
        $query = "DELETE FROM chillis WHERE id_chillis='$chili_id'";
        mysqli_query($link, $query);
        $_SESSION['errors'] = array("Čili je bil izbrisan!");
        header("Location: chili_list.php");
        die();
    } else {
        $_SESSION['errors'] = array("Tega čilija nemorete izbrisati!");
        header("Location: chili_list.php");
        die();
    }
    die();
?>
