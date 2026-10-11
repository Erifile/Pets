<?php session_start(); 


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafePaw | Регистрация</title>
    <link rel="stylesheet" href="css/regStyle.css"> 
    <script src="js/theme-switcher.js" defer></script>
    <script src="js/regForm.js" defer></script>
</head> 
<body>
    
    
    <div id="Wrap">

        <div id="title">
            <h1>SafePaw</h1>
            <h2>Регистрация</h2>
        </div>

        <form action="php/reg.php" method="POST" id="form">

            <div class="inputs">

            <label for="login">Логин</label>
            <input type="text" required name="login" id="login" placeholder="Создайте логин..">

            <label for="password">Пароль (8-30 символов, без пробелов)</label>
            <input type="password"  class="password" required name="password" id="password" placeholder="Создайте пароль..">

            <label for="repPassword" >Повтор пароля</label>
            <input type="password"  class="password" required name="repPassword" id="repPassword" placeholder="Введите пароль повторно..">

            <p id="message"></p>

            <label for="fio">ФИО</label>
            <input type="text" required name="fio" id="fio" placeholder="Ваше ФИО..">

            <label for="email">Почта</label>
            <input type="email" required name="email" id="email" placeholder="Введите почту..">

            <label for="phone">Телефон</label>
            <input type="phone" required name="phone" id="phone" placeholder="Введите телефон..">

            <?php 

            // вывод массива ошибок регистрации ($_SESSION['errors']) в список
            if(isset($_SESSION['errors'])):
                echo '<ul class="error-list">';
                foreach ($_SESSION['errors'] as $err) {
                    echo '<li>'.$err.'</li>';
                }
                echo '</ul>';
                unset($_SESSION['errors']);
            endif;
            ?>


            <label for="accept">Согласен на обработку персональных данных</label>
            <input type="checkbox" required name="accept" id="accept">

            
            <input type="submit" value="Зарегистрироваться" id="submit">

            </div>

            <a href="login.php"><div>Есть аккаунт?</div></a>

        </form>
    </div>
</body>
</html>