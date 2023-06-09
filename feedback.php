<?php
    $title = "Выход";
    require "blocks/header.php";
?>

<main class="index_div_2">

    <?php
        require "blocks/menu.php"
    ?>

    <div class="feedback_div">
        <div class="container mt-5">
            <form action="check_post.php" method="post">
                <h5>Будем рады вашей обратной связи:</h5><br>
                <input type="text" name="user_name" placeholder="Введите имя" class="input-style"><br>
                <input type="email" name="user_email" placeholder="Введите email" class="input-style"><br>
                <textarea name="user_message" placeholder="Введите сообщение" class="input-style"></textarea><br>
                <input type="submit" value="Отправить" class="btn btn-success"><br>
            </form>
        </div>
    </div>

</main>

<?php
    require "blocks/footer.php";
?>