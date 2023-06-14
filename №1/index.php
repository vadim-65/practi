<?php
session_start(); #Создание сессии, в которую вносятся данные, вводимые пользователем

if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = '';
}
if (!isset($_SESSION['mail'])) {
    $_SESSION['mail'] = '';
}                                   // Инициалузируем переменные в сессию, т.е. создаем внутри сессии (она выступает в роли ассоциативного массива) ключи для значений которые введет пользователь
if (!isset($_SESSION['image'])) {
    $_SESSION['image'] = '';
}
if (!isset($_SESSION['message'])) {
    $_SESSION['message'] = '';
}
?>

<form style="background:#f4f5f7; padding: 20px;" method="post" action="mail.php" enctype="multipart/form-data">
    
    <div class="left">
        <label for="name">Имя:</label>
        <input required maxlength="30" type="text" name="name" value=<?=$_SESSION['name']?>>

        <label for="mail">E-mail:</label>
        <input required maxlength="30" type="email" name="mail" value=<?=$_SESSION['mail']?>>

        <label for="image">Файл:</label>
        <input accept=".jpg, .png" type="file" name="image" value=<?=$_SESSION['image']?>>
    </div>

    <div class="right">
        <label for="message">Сообщение:</label>
        <textarea rows="7" cols="50" name="message" value=<?$_SESSION['message']?>></textarea>

        <input required type="submit" value="Отправить">
    </div>

</form>


