<?php 
    include 'templates/head.php';
    require_once 'connect.php';
?>
<div class="container mt-5 text-center">
    <div class="row">
        <div class="col">
        <p class="fw-bold" style="font-size: 50px;">Регистрация</p>
        </div>
    </div>
    <form action="signup.php" method="post">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" id="surename" name="surename" placeholder="Фамилия" value="" required="">
            </div>
            <div class="col">
                <input type="text" class="form-control" id="name" name="name" placeholder="Имя" value="" required="">
            </div>
            <div class="col">
                <input type="text" class="form-control" id="patronymic" name="patronymic" placeholder="Отчество" value="" required=""> 
            </div>
        </div>
        <div class="row mt-3">
        <div class="col">
            <input type="text" class="form-control" id="login" name="login" placeholder="Логин" value="" required=""> 
        </div>
        </div>
        <div class="row mt-3">
        <div class="col">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        </div>
        <div class="row mt-3">
        <div class="col">
            <input type="password" class="form-control" id="password" name="password" placeholder="Пароль" value="" required="">
        </div>
        <div class="col">
            <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Повторите пароль" value="" required="">
        </div>
        </div>
        <div class="row mt-3">
        <div class="col">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Я согласен с условиями пользовательского соглашения</label>
            </div>
                <button class="btn btn-danger btn-lg btn-block mt-3" type="submit">Зарегистрироваться</button>
        </div>
        </div>
        <?php 
            if ($_SESSION['message']){
                echo '<p class="msg">' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);
        ?>
        </div> 
    </form>
    <?php
        include 'templates/footer.html';  
    ?>