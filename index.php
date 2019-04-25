<?php
include_once 'add_news.php';
include_once 'display_news.php';
?>

<!DOCTYPE html>
<meta charset="utf-8">

<head>
    <title>Новостной портал</title>
    <style type="text/css">
            
        #top_bar {
            width: 100%;
            height: 100%;
            float: left;
            background: #a4b3ff;
            color: white;
        }
    </style>
</head>

<body>
    <?php display_news(); ?>
    <div id="top_bar">
        <br>
        <h3>::Add News</h3>
        
        <form action="add_news.php" method="post">
			<div>
				<input autocomplete="off" type="text" placeholder="Введите заголовок" name="name" required>
				<textarea autocomplete="off" class="max" id="content" placeholder="Введите описание" name="content" required></textarea>
				<input type="submit" value="Отправить">
			</div>
		</form>
    </div>
</body>
