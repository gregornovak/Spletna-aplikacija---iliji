<?php
    //vključim sejo, da preverim če je uporabnik vpisan
    include_once './session.php';
    //vključim podatkovno bazo, ker bom posodabljal zapis
    include_once './database.php';
    if (!isset($_SESSION['user_id'])) {
        header("Location: login_user.php");
    }
    //pridobim id objave iz post_edit.php forme
    $post_id = (int)$_POST['id'];
    $title   = mysqli_real_escape_string($link, $_POST['title']);
    $content = mysqli_real_escape_string($link, $_POST['content']);
    //če polja niso prazna posodobi zapis
    if (!empty($post_id) && !empty($title) && !empty($content)) {
        $query = "UPDATE blog SET blog_title='$title', blog_content='$content' WHERE id_blog='$post_id'";
        mysqli_query($link, $query);
        mysqli_close($link);
        header("Location: blog_post.php?id=$post_id");
        die();
    } else {
        header("Location: blog_post.php?id=$post_id");
        die();
    }

?>
