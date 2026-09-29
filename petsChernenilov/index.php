<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets | Главная</title>
</head>

<?php if (!isset($_SESSION['user'])){ 
            header('Location:reg.php');
         }; ?>


<body>
    <a href="reg.php">На страницу регистрации</a>
    <a href="reg.php">На страницу авторизации</a>
</body>
</html>
