<?php
include_once "config.php";

function display_news() {
    global $connect;
    $result = mysqli_query($connect, "SELECT * FROM news ORDER BY id DESC");

    while($myrow = mysqli_fetch_assoc($result)) {
        ?>
        <div class="news_card">
            <div>
                <div ><?php echo $myrow['name']; ?></div>
                <div class="flex_text"><?php echo $myrow['content']; ?></div>
                <form action="delete_news.php" method="post">
                    <input type="hidden" name='name' value='<?php echo $myrow['name']; ?>'>
                    <input type="submit" value="Delete post">
                </form>
            </div>
        </div>
        <?php
    }
}
?>