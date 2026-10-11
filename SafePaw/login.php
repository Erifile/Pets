<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafePaw | Авторизация</title>
    <link rel="stylesheet" href="css/authStyle.css"> 
    <script src="js/theme-switcher.js" defer></script>
    <script src="js/sessionMsg.js" defer></script>
</head> 
<body>


    <?php if(isset($_SESSION['message'])): ?>
        <p class="sessionMsg"> <?php echo $_SESSION['message']; ?></p>
        <?php unset($_SESSION['message']);
        endif; 
    ?>

    
    <div id="Wrap">

            <div id="title">
                <h1>SafePaw</h1>
                <h2>Авторизация</h2>
            </div>

            <form action="php/auth.php" method="POST" id="form">
                <div class="inputs">

                <label for="login">Логин / Email</label>
                <input type="text" required name="login" id="login" placeholder="Введите логин или Email..">

                <label for="password">Пароль</label>
                <input type="password"  class="password" required name="password" id="password" placeholder="Создайте пароль..">

                <input type="submit" value="Войти">

                </div>

                <a href="register.php"><div>Нет аккаунта?</div></a>

            </form>

        </div>
    
</body>
</html>