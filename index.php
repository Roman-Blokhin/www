<?php
    $title = "Главная страница";
    require "blocks/header.php";
?>

<nav>
    <form action="check_post.php" method="post" class="search_block">
        <input type="text" name="search" id="search" placeholder="Введите слово.." class="field_search"><br>
        <!-- <label for="search">Быстрый поиск</label> -->
        <input type="submit" value="Начать" class="search_button"><br>
    </form>
</nav>

<section> <!-- в работе -->
    <form id="aside">
        <fieldset>
            <legend>Информация обо мне:</legend>
        </fieldset>
    </form>
</section>

<nav> <!-- в работе -->
    <p>Рано или поздно все получится!</p>
</nav>

<?php
    echo "<h1>Главная страница</h1>"
?>

<?php
    require "blocks/footer.php";
?>