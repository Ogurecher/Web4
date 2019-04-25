<?php
include_once "config.php";

function display_news() {
    global $connect;
    $result = mysqli_query($connect, "SELECT * FROM news ORDER BY id DESC");

    while($myrow = mysqli_fetch_assoc($result)) {
        ?>
        <div style="width: 20%; height: auto; background: blue; color: white; margin: 1%">
            <div style="margin: 5%">
                <div style="margin: 5%"><?php echo $myrow['name']; ?></div>
                <div style="color: yellow"><?php echo $myrow['content']; ?></div>
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