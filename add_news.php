<?php
include_once "config.php";

if (!empty($_POST['name']) && !empty($_POST['content'])) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $content = mysqli_real_escape_string($connect, $_POST['content']);
    $result = mysqli_query($connect, "INSERT INTO news (name, content)
                            VALUES ('$name','$content');");
    
    header('Location: index.php');
    exit();
}
?>