<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets | Регистрация</title>
    <link rel="stylesheet" href="css/forms.css">
</head>
<body>
    <div class="form">
        <form action="php/reg.php" method="POST">
            <input type="text" name="login" placeholder="Введите логин">
            <input type="password" name="password" placeholder="Введите пароль">
            <input type="password" name="repPassword" placeholder="Введите повтор пароля">
            <input type="email" name="email" placeholder="Введите почту">
            <label for="pdata">Согласен на обработку перс. данных</label>
            <input type="checkbox" id="pdata">
            <input type="submit" value="Зарегистрироваться">
        </form>
            <a href="loginPage.php">Есть аккаунт?</a>

    </div>
    
       
</body>
</html>