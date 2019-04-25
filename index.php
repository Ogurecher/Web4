<?php
include_once 'add_news.php';
include_once 'display_news.php';
?>

<!DOCTYPE html>
<meta charset="utf-8">

<head>
    <title>News Portal</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>
    <?php display_news(); ?>
    <div class="form">
        <form action="add_news.php" method="post">
			<div>
                <h1 class="submit_header"> Submit news </h1>
				<input class="input_field"autocomplete="off" type="text" placeholder="Title" name="name" required>
				<textarea class="textarea" autocomplete="off" class="max" id="content" placeholder="Content" name="content" required></textarea>
				<input class="submit_button" type="submit" value="Submit">
			</div>
		</form>
    </div>
</body>
