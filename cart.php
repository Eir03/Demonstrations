<?php 
    include 'templates/head.php';
    require_once 'connect.php';
?>
    <div class="container">
        <div class="mt-5 text-start" style=" margin-left: 3rem">
            <div class="row">
              <div class="col">
                <p class="fw-bold" style="font-size: 50px;">Корзина</p>
              </div>
            </div>
        </div>
        <!-- Начало корзины -->
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Название товара</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Цена</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(isset($_SESSION['basket'])):
                    $cost = 0;
                    // Вывод корзины
                    foreach($_SESSION['basket'] as $i):
                        $id = $i['id'];
                        $product = mysqli_query($conn, "SELECT * FROM Product WHERE `Id` = '$id'");
                        while ($row = mysqli_fetch_assoc($product)):?>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="same-address">
                                    </div>
                                </th>
                                <td><?php echo $row['Name']?></td>
                                <td><?php echo $row['Description']?></td>
                                <td><?php echo $row['Cost']; $cost = $cost + (int) $row['Cost']?></td>
                            </tr>
                    <?php endwhile; endforeach; endif;?>
                
                <thead>
                    <tr class="fw-bold" style="font-size: 20px;">
                        <th scope="row"></th>
                        <td colspan="2"></td>
                        <td>Итоговая цена: <?php echo $cost?></td>
                    </tr>
                 </thead>
            </tbody>
        </table>
        <!-- Конец корзины -->
    </div>
    <?php
        include 'templates/footer.html';  
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>