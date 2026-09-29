<?php
session_start();

require_once '../database/dbconnect.php';


// Защита от перехода к этому обработчику через Адрс. строку ($_GET запрос)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit();
}

$inputs = ['login', 'password', 'repPassword', 'email'];

foreach ($inputs as $input) {
    if (empty($_POST[$input])) {
        $_SESSION['message'] = 'Ошибка. Есть пустые поля формы.';
        header("Location:../index.php?stat=error");
        exit();
    }
}

if ($_POST['password'] !== $_POST['repPassword']) {
    $_SESSION['message'] = 'Ошибка. Пароли не совпадают';
    header("Location: ../index.php?stat=error");
    exit();
}

$login = trim($_POST['login']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$email = $_POST['email'];

$check = $conn->prepare("SELECT COUNT(*) FROM users WHERE login = :login");
$check->execute([':login' => $login]);
$exists = $check->fetchColumn();

if ($exists) {
    $_SESSION['message'] = 'Логин занят!';
    header("Location:../index.php?stat=error");
    exit();
}

$stmt = $conn->prepare("INSERT INTO users (login, password, email) VALUES (:login, :password, :email)");
$stmt->execute([
    ':login' => $login,
    ':password' => $password,
    ':email' => $email
]);

$_SESSION['message'] = 'Регистрация успешна!';
header("Location:../loginPage.php?stat=success");
exit();
?>