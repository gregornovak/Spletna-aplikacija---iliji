<?php
    include_once './header.php';
?>
<div class="chili-container">
    <div class="chili-container-inner">
        <div class="chili-name">
            <h2>Carolina Reaper</h2>
        </div>
        <hr class="chili-hr">
        <div class="chili-image">
            <img src="./assets/images/chili-8.jpg" alt="spicy">
        </div>
        <div class="chili-details">
            <div class="chili-description">
                <h3 class="chili-headings">Opis</h3>
                <p class="chili-paragraphs">The Carolina Reaper, originally named the HP22B, is a cultivar of chili pepper of the Capsicum chinense species. It is currently the hottest pepper in the world.</p>
            </div>
            <div class="chili-sort">
                <h3 class="chili-headings">Vrsta</h3>
                <p class="chili-paragraphs">Capsicum chinense</p>
            </div>
            <div class="chili-scoville">
                <h3 class="chili-headings">Scoville enote</h3>
                <p class="chili-paragraphs">1,569,300 SHU</p>
            </div>
        </div>
        <hr class="chili-hr">
        <div class="chili-comment-container">
            <form action="insert_comment.php" method="post">
                <input type="hidden" name="id" value="<?php echo $comment_id;?>" />
                <label for="content">Komentiraj</label>
                <textarea name="content"></textarea>
                <input class="comment-button" type="submit" value="Pošlji" />
            </form>
        </div>
        <hr class="chili-hr">
        <div class="chili-comments">
            <div class="user-comment">
                <span class="user-name">Gregor</span><span class="comment-date">30.07.2016</span>
                <p>Najboljši čili ever, 10/10!</p>
            </div>
            <div class="user-comment">
                <span class="user-name">Garega</span><span class="comment-date">31.07.2016</span>
                <p>Pečeeeeeeeee na pas mater.</p>
            </div>
        </div>
    </div>
</div>
<?php
    include_once './footer.php';
?>
