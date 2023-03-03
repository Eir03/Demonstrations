<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="icon" href="/media/images/icon.png">
    <title>Music house</title>
</head>
<body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <h3 class="d-flex align-items-center col-md-3 mb-2 ml-4 mb-md-0">Music House</h3>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="about.php" class="nav-link px-2 link-dark">О нас</a></li>
            <li><a href="index.php" class="nav-link px-2 link-dark">Каталог</a></li>
            <li><a href="location.php" class="nav-link px-2 link-dark">Где нас найти?</a></li>
        </ul>
        <?php
          session_start();
          if(!isset($_SESSION['User'])){
            echo "<div class=\"text-end col-md-3\">
                    <a href=\"./login.php\" class=\"btn btn-outline-danger me-2\">Вход</a>
                    <a href=\"./registration.php\" class=\"btn btn-danger\">Регистрация</a>
                  </div>";
          }else{
            echo "<div class=\"text-end col-md-3\">
                    <p class=\"fw-bold\">Привет " . $_SESSION['User']['Name'] . "!</p>
                    <a href=\"./cart.php\" class=\"btn btn-outline-danger me-2\">Корзина</a>
                    <a href=\"./logout.php\" class=\"btn btn-danger\">Выйти</a>
                  </div>";
          }
        ?>
    </header>