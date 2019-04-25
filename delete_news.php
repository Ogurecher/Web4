<?php
include_once "config.php";

if (!empty($_POST['name'])) {
    echo $_POST['name'];
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $result = mysqli_query($connect, "DELETE FROM news WHERE news.name = '$name';");
    
    header('Location: index.php');
    exit();
}

?>