<?php 
    include 'templates/head.php';
    require_once 'connect.php';
?>
    <div class="m-0 mt-lg-5 position-relative banner">
        <img src="media/images/piano.jpg" style="max-width:100%; max-height:60%;" alt="">
        <div class="shake text-center position-absolute" style="top: 20%; left: 35%;">
            <h1>Music House</h1>
            <h3>Почувствуй наше музыкальное безумие</h1>
        </div>
    </div>
    <h1 class="text-center mt-5">Каталог</h1>
    <div class="dropdown text-center mt-5">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="combo" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Категория
        </button>
        <ul class="dropdown-menu" aria-labelledby="combo">
            <li><a class="dropdown-item" href="#">Все</a></li>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM Category");
            
            while($row = mysqli_fetch_assoc($result)) {
                echo'<li><a class="dropdown-item" href="#">'. $row['Name'] .'</a></li>';
            }
            ?>
        </ul>
    </div>
    
    <div class="container mt-5">
        <div class="row row-cols-auto">
            <?php
            $result = mysqli_query($conn, "SELECT * FROM Product WHERE Count > 0");
            
            while($row = mysqli_fetch_assoc($result)):?>
                <div class="col pb-5">
                    <div class="card" style="width: 18rem; height: 32rem;">
                        <a href="product.php?id=<?= $row['Id'] ?>"><img style="height: 289px; object-fit: contain" src="media\images\<?= $row['Image'] ?>.jpeg" class="card-img-top" alt="..."/></a>
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['Name'] ?></h5>
                            <p class="card-text"><?= $row['Description'] ?></p>
                            <a class="btn btn-warning mb-5" href="add_to_cart.php?id=<?php echo $row['Id']?>" style="position : absolute; bottom: 0;" data-id="<?= $row['Id'] ?>">В корзину</a>
                        </div>
                    </div>
                </div>
            <?php 
            endwhile;?>
        </div>
        
    </div>
    <?php
        include 'templates/footer.html';  
    ?>
    
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>