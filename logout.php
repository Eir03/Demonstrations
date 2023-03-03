<?php 
//Выход из сессии
session_start();
unset($_SESSION["User"]);
unset($_SESSION["basket"]);
unset($_SESSION['message']);
header("Location: index.php");
?>