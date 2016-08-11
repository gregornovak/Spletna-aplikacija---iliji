<?php
    //vključim sejo, da preverim če je uporabnik vpisan
    include_once './session.php';
    include_once './database.php';

    if (!isset($_SESSION['user_id'])) {
        header("Location: login_user.php");
    }
    //pridobim id userja iz seje
    $user_id    = $_SESSION['user_id'];
    //pridobim id objave iz comment forme
    $post_id    = (int)$_POST['post_id'];
    $comment    = mysqli_real_escape_string($link, $_POST['comment']);
    if (!empty($post_id) && !empty($comment)) {
        $query ="INSERT INTO comments(comment, id_users, id_blog) VALUES('$comment', '$user_id', '$post_id')";
        mysqli_query($link, $query);
        mysqli_close($link);
        header("Location: blog_post.php?id=$post_id");
        die();
    } else {
        header("Location: blog_post.php?id=$post_id");
        die();
    }
?>
