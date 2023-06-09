<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?=$title;?> </title>

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
</head>

<body>

<header class="header">

    <div>
        <img src="img/cloud1.png" alt="cloud_logo" class="cloud_logo">
    </div>

    <div class="logo_text">
        <hi>Clouds</hi>
    </div>

    <div>
        <nav>
            <form action="check_post_search.php" method="post" class="search_block">
                <input type="text" name="search" id="search" placeholder="Поиск.." class="field_search">
                <input type="submit" value="Начать"  class="search_button">
            </form>
        </nav>
    </div>

    <div class="datetime_header">
        <?php
            echo $today = date ('d.m.y H:i');
        ?>
    </div>

</header>
