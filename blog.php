<?php
    include_once './session.php';
    include_once './header.php';
    include_once './database.php';
    if (!isset($_SESSION['user_id'])) {
        header("Location: login_user.php");
        die();
    }
    $user_id = $_SESSION['user_id'];
    $query   = mysqli_real_escape_string($link, "SELECT * FROM users WHERE id_users='$user_id' AND admin='1'");
    $result  = mysqli_query($link, $query);

?>

<div class="chilis-container">
    <div class="chilis-title">
        <?php
            // če ima ta uporabnik s tem idjem admin=1, prikaži
            if (mysqli_num_rows($result) != 0) {
        ?>
        <a href="add_post.php"><i class="fa fa-plus-circle fa-custom-plus"></i><span class="add-new">Dodaj objavo</span></a>
        <?php
            }
        ?>
        <h2>Seznam vseh objav</h2>

    </div>
    <div class="blog-posts">
        <?php
            //poizvedba -> združim tri tabele za izpis
            $query = mysqli_real_escape_string($link, "SELECT b.id_blog, b.blog_title, b.date_added, u.first_name, u.last_name FROM blog_users bu INNER JOIN users u ON bu.id_users=u.id_users INNER JOIN blog b ON bu.id_blog=b.id_blog ORDER BY date_added DESC");
            $result = mysqli_query($link, $query);
            while ($blog = mysqli_fetch_array($result)) {
        ?>
        <div class="post">
            <a href="blog_post.php?id=<?php echo $blog['id_blog']; ?>"><?php echo $blog['blog_title']. ' '; ?><span class="blog-info">Objavil: <?php echo $blog['first_name']. ' ' .$blog['last_name']; ?> </span></a>
        </div>
        <hr class="chili-hr">
        <?php
            }
            mysqli_close($link);
        ?>
    </div>
</div>

<?php
    include_once './footer.php';
?>
