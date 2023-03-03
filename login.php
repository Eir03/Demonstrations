<?php 
    include 'templates/head.php';
    require_once 'connect.php';
?>
    
     
<div class="container mt-5 text-center">
    <div class="row">
    <div class="col">
        <p class="fw-bold" style="font-size: 50px;">Авторизация</p>
    </div>
    </div>
    <form action="signin.php" method="post">
        <div class="row">
        <div class="col">
            <input type="text" class="form-control" id="login" name="login" placeholder="Логин" value="" required="">
        </div>
        </div>
        <div class="row mt-3">
        <div class="col">
            <input type="password" class="form-control" id="password" name="password" placeholder="Пароль" value="" required="">
            <button class="btn btn-danger btn-lg btn-block; mt-3" type="submit">Авторизация</button>
        </div>
        </div>
    <?php 
    if ($_SESSION['message']){
        echo '<p class="msg ">' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);?>
    </form>
    </div> 
    <?php
        include 'templates/footer.html';  
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>