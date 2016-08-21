<?php
    //vključim sejo, da preverim če je uporabnik vpisan
    include_once './session.php';
    //vključim bazo, ker bom izpisoval iz nje
    include_once './database.php';
    include_once './header.php';

    if (!isset($_SESSION['user_id'])) {
        header("Location: login_user.php");
    }
    //pridobim id uporabnik iz seje
    $user_id = $_SESSION['user_id'];
    //pridobim id objave z get ukazom
    $post_id = (int) $_GET['id'];
    //poizvedba -> združim tri tabele
    $query = mysqli_real_escape_string($link, "SELECT b.blog_title, b.blog_content, b.date_added, bu.id_users, bu.id_blog, u.first_name, u.last_name FROM blog_users bu INNER JOIN users u ON bu.id_users=u.id_users INNER JOIN blog b ON bu.id_blog=b.id_blog WHERE b.id_blog='$post_id'");
    $result = mysqli_query($link, $query);
    $post = mysqli_fetch_array($result);
?>
<div class="chili-container">
    <div class="chili-container-inner">
        <div class="chili-name">
            <h2><?php echo $post['blog_title'];?></h2>
        </div>
        <hr class="chili-hr">
        <div class="chili-details">
            <div class="chili-description">
                <p class="chili-paragraphs" style="text-indent: 10px;"><?php echo $post['blog_content']; ?></p>
            </div>
            <div class="chili-user">
                <p class="chili-paragraphs" style="margin-top: 8px;"><i><?php echo $post['first_name'].' '.$post['last_name']. ', ' .$post['date_added']; ?></i></p>
            </div>
            <?php
                //če je id uporabnika enak idju uporabnik, ki je vpisan
                if ($post['id_users'] == $user_id){
            ?>
            <div class="chili-change">
                <h3 class="chili-headings">Uredi objavo</h3>
                <p class="chili-paragraphs"><a href="post_edit.php?id=<?php echo $post_id; ?>"><i class="fa fa-pencil"></i> Uredi</a></p>
                <p class="chili-paragraphs"><a href="post_delete.php?id=<?php echo $post_id; ?>"><i class="fa fa-trash"></i> Izbriši</a></p>
            </div>
            <?php
                }
            ?>
        </div>

        <hr class="chili-hr">
        <div class="chili-comment-container">
            <form action="insert_post_comment.php" method="post">
                <input type="hidden" name="post_id" value="<?php echo $post_id;?>" />
                <label for="comment">Komentiraj</label>
                <textarea name="comment"></textarea>
                <input class="comment-button" type="submit" value="Pošlji" />
                <?php if(isset($_SESSION['errors'])) { ?>
                    <div class="error-container">
                        <?php foreach($_SESSION['errors'] as $error) { ?>
                            <p class="error-text"><?php echo $error; ?></p>
                        <?php } ?>
                    </div>
                <?php } unset($_SESSION['errors']); ?>
            </form>
        </div>
        <hr class="chili-hr">
        <div class="chili-comments">
        <?php
            //poizvedba za komentarje
            $query = mysqli_real_escape_string($link, "SELECT u.first_name, u.last_name, c.comment, c.date_added FROM comments c INNER JOIN users u ON c.id_users=u.id_users WHERE id_blog='$post_id' ORDER BY c.date_added DESC");
            $result = mysqli_query($link, $query);
            //dokler najdeš rezultat -> izpisuj
            while($comment = mysqli_fetch_array($result)) {
        ?>
            <div class="user-comment">
                <span class="user-name"><?php echo $comment['first_name']. ' '. $comment['last_name'];?></span><span class="comment-date"><?php echo date("d. n. Y h:i:s",strtotime($comment['date_added']));?></span>
                <p><?php echo $comment['comment']; ?></p>
            </div>
        <?php
            }
        ?>
        </div>
    </div>
</div>
<?php
    include_once './footer.php';
?>
