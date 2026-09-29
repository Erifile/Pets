<?php

session_start();

// Защита от перехода к этому обработчику через Адрс. строку
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit();
}

if (isset($_SESSION['login']))
	{
		header('Location:../index.php');
		exit();
	} 

require_once '../database/dbconnect.php';

$login = trim($_POST['login']);
$password = $_POST['password'];

// 6) 
$checkUser = $conn -> prepare("SELECT * from users where login = :login or email = :email");
$checkUser -> execute
    (
    [
        ':login' => $login,
        ':email' => $login // т.к. в инпуте можно или email или логин.
    ]);
$checkUser = $checkUser -> fetch(PDO::FETCH_ASSOC); // если селект не найдет ничего, то массив $checkUser выдаст emptyset

if (!$checkUser || !password_verify($password, $checkUser['password']))
{
    $_SESSION['message'] = 'Ошибка. Неверный логин или пароль';
    header("Location:../loginPage.php?stat=error");
    exit(); 
};

session_regenerate_id(true);

$_SESSION['user'] = [ // (перекидывание из массива $checkUser) КРОМЕ пароля.
    'userId' => $checkUser['id'],
    'userLogin' => $checkUser['login'],
    'userEmail' => $checkUser['email'],
    'userRole' => $checkUser['role']
];
   
header("Location:"."profilePage.php");
exit();