<?php
    $title = "Главная страница";
    require "blocks/header.php";
?>

<main>

    <section class="menu">
        <a href="index.php" class="links">Моя страница</a>
        <a href="news.php" class="links">Новости</a>
        <a href="friends.php" class="links">Друзья</a>
        <a href="groups.php" class="links">Сообщества</a>
        <a href="fotoalbums.php" class="links">Фотографии</a>
        <a href="music.php" class="links">Музыка</a>
        <a href="feedback.php" class="links">Обратная связь</a>
    </section>

</main>



<?php
    require "blocks/footer.php";
?>