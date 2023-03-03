<?php 
    include 'templates/head.php';
    require_once 'connect.php';
?>
    <div class="container mb-5">
        <h2 class="text-center pb-5">Новиночки, только здесь и только сейчас!</h2>
        <div id="Carousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <ol class="carousel-indicators m-4">
                <li type="button" data-bs-target="#Carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
                <li type="button" data-bs-target="#Carousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></li>
                <li type="button" data-bs-target="#Carousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></li>
                <li type="button" data-bs-target="#Carousel" data-bs-slide-to="3" aria-label="Slide 4" class=""></li>
                <li type="button" data-bs-target="#Carousel" data-bs-slide-to="4" aria-label="Slide 5" class=""></li>
            </ol>
            <div class="carousel-inner text-center">
                <?php

                $result = mysqli_query($conn, "SELECT * FROM Product ORDER BY Date DESC LIMIT 5");
                $count = 0;
                while($row = mysqli_fetch_assoc($result)) {
                    if ($count == 0){
                        echo'<div class="carousel-item active" data-interval="2000">';
                    }
                    else{
                        echo'<div class="carousel-item" data-interval="2000">';
                    }
                    echo'    <a href="product.php?id=' .$row['Id']. '"><img class="img w-10 " style="width: 289px; height: 289px; object-fit: contain" src="media/images//' . $row['Image'] . '.jpeg" aria-hidden="true"/></a>';
                    echo'    <h3>' . $row['Name'] .'</h3>';
                    echo'    <p>' . $row['Description'] .'</p>';    
                    echo'    <a class="btn"></a>';
                    echo'</div>';
                    $count++;
                }
                mysqli_close($conn);
                ?>
            </div>
            <a class="carousel-control-prev" type="button" data-bs-target="#Carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" type="button" data-bs-target="#Carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <div class=" m-0 mt-lg-5 position-relative">
        <img src="media/images/illustration-design.jpg" style="max-width:100%; max-height:90%;" alt="">
        <div class="shake text-center text-white position-absolute" style="top: 50%; left: 20%;">
            <h1>Music House</h1>
            <h3>Почувствуй наше музыкальное безумие</h3>
            <h6 class="text-black-50">(Наведись на меня)</h6>
        </div>
    </div>
    <?php
        include 'templates/footer.html';  
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>