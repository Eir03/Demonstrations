<?php
    session_start();
    require_once 'connect.php';

    $surename = $_POST['surename'];
    $name = $_POST['name'];
    $patronymic = $_POST['patronymic'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

  if ($password === $password_confirm) {
    mysqli_query($conn, "INSERT INTO `Users` (`Id`, `Name`, `Surename`, `Patronymic`, `Login`, `Email`, `Password`) 
       VALUES (NULL, '$surename', '$name', '$patronymic', '$login', '$email', '$password')");
        $_SESSION['message'] = 'Регистрация прошла успешно';
        header('Location: login.php');

  }else{
      $_SESSION['message'] = 'Пароли не совпадают';
      header('Location: registration.php'); 
    }
 ?>