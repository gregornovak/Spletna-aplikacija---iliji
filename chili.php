<?php
    //vključim sejo, da preverim če je uporabnik vpisan
    include_once './session.php';
        //vključim podatkovno bazo, ker bom izpisoval podatke
    include_once './database.php';
    include_once './header.php';
    if (!isset($_SESSION['user_id'])) {
        header("Location: login_user.php");
        die();
    }
    //<?php
    //echo $_GET["name"];
    //Assuming the user entered http://example.com/?name=Hannes
    //pridobim id čilija, da ga lahko najdem v bazi
    $chilis_id = (int)$_GET['id'];
    //poizvedba za čili
    $query = "SELECT u.first_name, u.last_name, c.*, s.sort_name FROM chillis c INNER JOIN users u ON c.id_users=u.id_users INNER JOIN sorts s ON c.id_sorts=s.id_sorts WHERE id_chillis='$chilis_id'";
    $result = mysqli_query($link, $query);
    $chili = mysqli_fetch_array($result);
?>
<div class="chili-container">
    <div class="chili-container-inner">
        <div class="chili-name">
            <h2><?php echo $chili['chili_name'];?></h2>
        </div>
        <hr class="chili-hr">
        <div class="chili-image">
            <img src="<?php echo $chili['chili_picture_url']?>" alt="spicy">
        </div>
        <div class="chili-details">
            <div class="chili-description">
                <h3 class="chili-headings">Opis</h3>
                <p class="chili-paragraphs"><?php echo $chili['chili_description']; ?></p>
            </div>
            <div class="chili-sort">
                <h3 class="chili-headings">Vrsta</h3>
                <p class="chili-paragraphs"><?php echo $chili['sort_name'] ?></p>
            </div>
            <div class="chili-scoville">
                <h3 class="chili-headings">Scoville enote</h3>
                <p class="chili-paragraphs"><?php echo $chili['chili_scoville']; ?> SHU</p>
            </div>
            <div class="chili-user">
                <h3 class="chili-headings">Čili dodal</h3>
                <p class="chili-paragraphs"><i><?php echo $chili['first_name'].' '.$chili['last_name']; ?></i></p>
            </div>
            <?php
                $user_id = $_SESSION['user_id'];
                if ($chili['id_users'] == $user_id){
            ?>
            <div class="chili-change">
                <h3 class="chili-headings">Uredi čili</h3>
                <p class="chili-paragraphs"><a href="chili_edit.php?id=<?php echo $chilis_id; ?>"><i class="fa fa-pencil"></i> Uredi</a></p>
                <p class="chili-paragraphs"><a href="chili_delete.php?id=<?php echo $chilis_id; ?>"><i class="fa fa-trash"></i> Izbriši</a></p>
            </div>
            <?php
                }
            ?>
        </div>
        <hr class="chili-hr">
        <div class="chili-comment-container">
            <form action="insert_comment.php" method="post">
                <input type="hidden" name="chili_id" value="<?php echo $chilis_id;?>" />
                <label for="comment">Komentiraj</label>
                <textarea name="comment" required="required"></textarea>
                <input class="comment-button" type="submit" value="Pošlji" />
                <?php if(isset($_SESSION['errors'])) {?>
                    <div class="error-container">
                        <?php foreach($_SESSION['errors'] as $error) {?>
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
                $query = "SELECT u.first_name, u.last_name, c.comment, c.date_added FROM comments c INNER JOIN users u ON c.id_users=u.id_users WHERE id_chillis='$chilis_id' ORDER BY c.date_added DESC";
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
