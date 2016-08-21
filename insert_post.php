<?php
    include_once './session.php';
    include_once './database.php';
    include_once './header.php';
    include_once './functions.php';
    if (!isset($_SESSION['user_id'])) {
        header("Location: login_user.php");
    }
    $user_id = $_SESSION['user_id'];
    $title   = clean_data($_POST['title']);
    $content = clean_data($_POST['content']);

    if (!empty($title) && !empty($content)) {
        $query = "INSERT INTO blog(blog_title, blog_content) VALUES ('$title', '$content')";
        $result1 = mysqli_query($link, $query);
        //http://php.net/manual/en/mysqli.insert-id.php
        //shrani se zadnji id, ki ga nato lahko uporabim za zapis
        $blog_id = mysqli_insert_id($link);
        $query = "INSERT INTO blog_users (id_users, id_blog) VALUES ('$user_id', '$blog_id')";
        $result2 = mysqli_query($link, $query);
        header("Location: blog_post.php?id=$blog_id");
        die();
    } else {
        $_SESSION['errors'] = array("Niste vpisali vseh podatkov!");
        header("Location: add_post.php");
        die();
    }


    mysqli_close($link);
?>
