<?php
    $title = "Выход";
    require "blocks/header.php";
?>

<main class="index_div_2">

    <?php
        require "blocks/menu.php"
    ?>

    <div class="feedback_div">
        <form action="check_post.php" method="post">
            <h2 class="text_feedback">Будем рады вашей обратной связи:</h2><br>
            <input type="text" name="user_name" placeholder="Введите имя" class="input-style"><br>
            <input type="email" name="user_email" placeholder="Введите email" class="input-style"><br>
            <textarea name="user_message" placeholder="Введите сообщение" class="input-style"></textarea><br>
            <input type="submit" value="Отправить" class="feedback_button"><br>
        </form>
    </div>

</main>

<?php
    require "blocks/footer.php";
?>
