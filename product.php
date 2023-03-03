<?php 
    include 'templates/head.php';
    require_once 'connect.php';

    $id = $_GET['id'];
    $query = "SELECT * FROM Product WHERE Id = '$id'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
?>

<div class="container">
    <div class="row">
        <div class="col">
                <img src="/media/images/<?php echo $row['Image']?>.jpeg" style="width: 400px; height: 800;" alt="Товар">
        </div>
        <div class="col">
            <p><b>Название:</b> <?php echo $row['Name']?></p>
            <p><b>Описание:</b> <?php echo $row['Description']?></p>
            <p><b>Страна:</b> <?php echo $row['Country']?></p>
            <p><b>Цена:</b> <?php echo $row['Cost']?> руб.</p>
            <p><b>В наличии:</b> <?php echo $row['Count']?></p>
            <p><a href="add_to_cart.php?id=<?php echo $row['Id']?>"class="btn btn-warning">В корзину</a> </p>
        </div>
    </div>
</div>

<?php
    include 'templates/footer.html';  
?>