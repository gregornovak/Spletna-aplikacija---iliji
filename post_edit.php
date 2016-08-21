<?php
    //vključim sejo, da preverim če je uporabnik vpisan
    include_once './session.php';
    //vključim podatkovno bazo, ker bom izpisoval naslov ter besedilo objave
    include_once './database.php';
    include_once './header.php';

    if (!isset($_SESSION['user_id'])) {
        header("Location: login_user.php");
    }
    //pridobim id objave z get ukazom
    $post_id = (int) $_GET['id'];
    //poizvedba
    $query = "SELECT * FROM blog WHERE id_blog='$post_id'";
    $result = mysqli_query($link, $query);
    $post = mysqli_fetch_array($result);
?>
<div class="register-user">
    <h2>Uredi objavo!</h2>
    <form action="post_update.php" method="POST">
        <ul class="register-form">
            <li>
                <input type="hidden" name="id" value="<?php echo $post_id;?>"
                <label for="title">Naslov objave:</label>
                <input type="text" name="title" required="required" value="<?php echo $post['blog_title'];?>">
            </li>
            <li>
                <label for="content">Besedilo:</label>
                <textarea name="content"><?php echo $post['blog_content']; ?></textarea>
            </li>
            <li>
                <input type="submit" value="Spremeni" name="submit" class="register-btn">
            </li>
            <?php if (isset($_SESSION['errors'])){ ?>
                <div class="error-container">
                    <?php foreach ($_SESSION['errors'] as $error) {?>
                        <p class="error-text"><?php echo $error; ?></p>
                    <?php } ?>
                </div>
            <?php } unset($_SESSION['errors']);?>
        </ul>
    </form>
</div>
<?php
    mysqli_close($link);
    include_once './footer.php';
?>
