<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?=$title;?> </title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>

<header class="header">
    <div>
        <nav>
            <form action="check_post.php" method="post" class="search_block">
                <input type="text" name="search" id="search" placeholder="Поиск.." class="field_search">
                <input type="image" src="img/search.png" class="search_button">
            </form>
        </nav>
    </div>
</header>