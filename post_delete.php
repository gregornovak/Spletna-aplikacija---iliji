<?php
    //vključim sejo, da preverim če je uporabnik vpisan
    include_once './session.php';
    //vključim podatkovno bazo, ker bom brisal iz nje
    include_once './database.php';
    if (!isset($_SESSION['user_id'])) {
        header("Location: login_user.php");
    }
    //pridobim id objave z get ukazom
    $post_id = (int) $_GET['id'];
    $query = "DELETE FROM blog WHERE id_blog='$post_id'";
    mysqli_query($link, $query);
    mysqli_close($link);
    header("Location: blog.php");
    die();
?>
