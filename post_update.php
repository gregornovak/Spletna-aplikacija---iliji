<?php
    //vključim sejo, da preverim če je uporabnik vpisan
    include_once './session.php';
    //vključim podatkovno bazo, ker bom posodabljal zapis
    include_once './database.php';
    include_once './functions.php';
    if (!isset($_SESSION['user_id'])) {
        header("Location: login_user.php");
    }
    //pridobim id objave iz post_edit.php forme
    $post_id = (int)$_POST['id'];
    $title   = clean_data($_POST['title']);
    $content = clean_data($_POST['content']);
    if(!empty($_POST['submit'])) {
        //če polja niso prazna posodobi zapis
        if (!empty($post_id) && !empty($title) && !empty($content)) {
            $query = mysqli_real_escape_string($link, "UPDATE blog SET blog_title='$title', blog_content='$content' WHERE id_blog='$post_id'");
            mysqli_query($link, $query);
            header("Location: blog_post.php?id=$post_id");
            die();
        } else {
            $_SESSION['errors'] = array("Niste vpisali vseh podatkov!");
            header("Location: blog_post.php?id=$post_id");
            die();
        }
    }
    mysqli_close($link);
?>
