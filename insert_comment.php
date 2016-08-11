<?php
    //vključim sejo, da preverim če je uporabnik vpisan
    include_once './session.php';
    //vključim podatkovno bazo, ker bom vpisoval podatke
    include_once './database.php';
    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php");
    }
    //id userja da vem kateri user je dodal komentar
    $user_id  = $_SESSION['user_id'];
    //id čilija da vem na katerem čiliju je komentiral uporabnik
    $chili_id = (int)$_POST['chili_id'];
    //pridobim komentar iz chili.php forme
    $comment  = mysqli_real_escape_string($link, $_POST['comment']);
    //če id čilija in komentar nista prazna -> zapiši v bazo
    if (!empty($chili_id) && !empty($comment)) {
        $query = "INSERT INTO comments(comment, id_users, id_chillis) VALUES('$comment', '$user_id', '$chili_id')";
        mysqli_query($link, $query);
        header("Location: chili.php?id=$chili_id");
        die();
    }
?>
