<?php
require_once 'connect.php';
session_start();


$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {

    $password = md5($password);
    
    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`) VALUES (NULL, '$full_name', '$login', '$email', '$password')");

    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: ../index.php');

} else{
    $_SESSION['message'] = 'Пороли не совпадают';
    header('Location: ../registration.php');
}