<?php
    $title = "Выход";
    require "blocks/header.php";
?>

<h1 class="header_parameters_2">Выход</h1>

<div class="container mt-5">
    <form action="check_post.php" method="post">
        <h5>Будем рады вашей обратной связи:</h5><br>
        <input type="text" name="user_name" placeholder="Введите имя" class="form-control"><br>
        <input type="email" name="user_email" placeholder="Введите email" class="form-control"><br>
        <textarea name="user_message" placeholder="Введите сообщение" class="form-control"></textarea><br>
        <input type="submit" value="Отправить" class="btn btn-success"><br>
    </form>
</div>

<?php
    require "blocks/footer.php";
?>