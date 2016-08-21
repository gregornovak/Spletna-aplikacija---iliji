<?php
    //vključim sejo, da preverim če je uporabnik vpisan
    include_once './session.php';
    include_once './database.php';
    include_once './functions.php';
    if (!isset($_SESSION['user_id'])) {
        header("Location: login_user.php");
    }
    //pridobim id userja iz seje
    $user_id    = $_SESSION['user_id'];
    //pridobim id objave iz comment forme
    $post_id    = (int)$_POST['post_id'];
    $comment    = clean_data($_POST['comment']);
    if (!empty($post_id) && !empty($comment)) {
        $query = "INSERT INTO comments(comment, id_users, id_blog) VALUES('$comment', '$user_id', '$post_id')";
        mysqli_query($link, $query);
        header("Location: blog_post.php?id=$post_id");
        die();
    } else {
        $_SESSION['errors'] = array("Niste vpisali komentarja!");
        header("Location: blog_post.php?id=$post_id");
        die();
    }
    mysqli_close($link);
?>
